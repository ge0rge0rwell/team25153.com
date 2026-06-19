# VPS Deployment Guide — team25153.com

This guide deploys the Cartesian Robotics website and Moodle LMS on a single VPS
under two domains:

| URL | What it serves |
|-----|----------------|
| `https://team25153.com` | Main Cartesian Robotics website |
| `https://lms.team25153.com` | Moodle LMS (embedded in the site at `/lms`) |

---

## 1. Requirements

**VPS minimum specs:**
- 2 GB RAM (4 GB recommended — Moodle is memory-hungry)
- 2 CPU cores
- 20 GB disk
- Ubuntu 22.04 LTS (recommended OS)
- Ports 80 and 443 open in the firewall

**You will need:**
- SSH access to your VPS
- Your VPS's public IP address
- Access to your domain registrar (to set DNS records)

---

## 2. Point DNS to Your VPS

In your domain registrar's DNS settings, add these three **A records**:

| Name | Type | Value |
|------|------|-------|
| `@` | A | `YOUR_VPS_IP` |
| `www` | A | `YOUR_VPS_IP` |
| `lms` | A | `YOUR_VPS_IP` |

Replace `YOUR_VPS_IP` with the actual IP address of your VPS.

> DNS changes can take up to 24 hours to propagate globally, but usually take
> 5–15 minutes. You can check with: `nslookup team25153.com`

---

## 3. Install Docker on the VPS

SSH into your VPS:
```bash
ssh root@YOUR_VPS_IP
```

Run the following to install Docker and Docker Compose:
```bash
# Update system
apt update && apt upgrade -y

# Install Docker
curl -fsSL https://get.docker.com | sh

# Verify
docker --version
docker compose version
```

---

## 4. Upload the Project to the VPS

**Option A — Clone from GitHub (if your repo is on GitHub):**
```bash
git clone https://github.com/ge0rge0rwell/team25153.com.git
cd team25153.com
```

**Option B — Upload from your computer using rsync:**
Run this on your own machine (not the VPS):
```bash
rsync -avz --exclude node_modules --exclude dist --exclude data \
  /Users/oguzhan/team25153.com/ root@YOUR_VPS_IP:/opt/team25153/
```
Then SSH in and go to the folder:
```bash
ssh root@YOUR_VPS_IP
cd /opt/team25153
```

---

## 5. Configure Environment Variables (Optional)

The defaults work out of the box, but if you want to change the site admin password:
```bash
cp .env.example .env   # if this file exists, otherwise skip
nano .env
```

Set at minimum:
```
ADMIN_USERNAME=admin
ADMIN_PASSWORD=your-secure-password
```

The Moodle admin credentials (`iatakan` / `123456`) are set in `docker-compose.yml`
and can be changed there before first boot.

---

## 6. Get SSL Certificates (First-Time Only)

This step talks to Let's Encrypt to get free HTTPS certificates.
**DNS must already be pointing to your VPS before this step.**

```bash
bash scripts/init-ssl.sh your@email.com
```

Replace `your@email.com` with your real email — Let's Encrypt sends renewal
warnings there.

The script will:
1. Start Nginx temporarily in HTTP-only mode
2. Obtain certificates for `team25153.com`, `www.team25153.com`, and `lms.team25153.com`
3. Switch Nginx to full HTTPS mode

> If the script fails with "DNS not found", your DNS hasn't propagated yet.
> Wait 10–15 minutes and try again.

---

## 7. Start Everything

```bash
docker compose up -d
```

This starts five services:
- **nginx** — reverse proxy + SSL termination
- **certbot** — auto-renews SSL certs every 12 hours
- **app** — Cartesian Robotics website (builds from source)
- **moodle** — Moodle LMS
- **mariadb** — Moodle's database

**First boot takes 5–10 minutes.** Moodle runs its installation wizard automatically
in the background. You can watch the progress with:
```bash
docker compose logs -f moodle
```

Wait until you see `moodle | INFO  ==> ** Moodle setup finished! **` before continuing.

---

## 8. Verify Everything Is Working

Open these URLs in your browser:

1. **https://team25153.com** — should show the Cartesian Robotics homepage
2. **https://lms.team25153.com** — should show Moodle login
3. **https://team25153.com/lms** — should show Moodle embedded in the site

If you see a security warning about SSL, wait 2–3 minutes for Nginx to fully load
the certificates and try again.

---

## 9. First Moodle Setup

1. Go to **https://lms.team25153.com**
2. Log in with:
   - **Username:** `iatakan`
   - **Password:** `123456`
3. Moodle will ask you to accept the terms of service — click through.

### Allow the LMS page to embed Moodle (required for `/lms` iframe)

In Moodle admin panel:
1. Go to **Site Administration → Security → HTTP Security**
2. Find **"Allow the web site to be embedded in a frame"** (or X-Frame-Options)
3. Set it to allow `https://team25153.com`
4. Click **Save changes**

### Create your first course

1. **Site Administration → Courses → Add a new course**
2. Fill in the course name, e.g. "Membership Onboarding Tasks"
3. Save — then enrol applicants manually or send them the enrolment key

### Give a user the ability to create courses

1. **Site Administration → Users → (find the user)**
2. Click their name → **Assign roles**
3. Assign the **Course Creator** role
   - Course Creator: can create and manage their own courses
   - Manager: can also see/edit all courses site-wide

---

## 10. Ongoing Maintenance

**View logs:**
```bash
docker compose logs -f         # all services
docker compose logs -f moodle  # just Moodle
docker compose logs -f app     # just the website
```

**Restart a service:**
```bash
docker compose restart nginx
docker compose restart moodle
```

**Update the website after pushing new code:**
```bash
git pull
docker compose up -d --build app
```

**Stop everything:**
```bash
docker compose down
```

**Backup Moodle data:**
```bash
docker compose exec mariadb mysqldump -u moodle -pmoodlepass moodle > moodle-backup.sql
docker run --rm -v team25153com_moodledata-data:/data -v $(pwd):/backup \
  alpine tar czf /backup/moodledata-backup.tar.gz -C /data .
```

SSL certificates renew automatically — no action needed.

---

## Troubleshooting

**Site shows "502 Bad Gateway"**
The app container is still starting. Wait 30 seconds and refresh.
```bash
docker compose ps        # check all services are "Up"
docker compose logs app  # check for errors
```

**Moodle shows a white page or database error**
MariaDB might still be initialising. Wait 2 minutes:
```bash
docker compose logs mariadb
docker compose logs moodle
```

**SSL certificate errors**
Check that DNS is pointing to your VPS:
```bash
nslookup team25153.com
nslookup lms.team25153.com
```
Both should return your VPS IP. If not, wait for DNS to propagate.

**"Connection refused" on port 80/443**
Check your VPS firewall:
```bash
ufw status
ufw allow 80
ufw allow 443
ufw allow 22
ufw enable
```
