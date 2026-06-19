#!/bin/bash
# First-time SSL certificate setup using Let's Encrypt.
# Run this ONCE after pointing your DNS to the VPS.
# Usage: bash scripts/init-ssl.sh your@email.com

set -e

EMAIL=${1:-"admin@team25153.com"}

echo ""
echo "==> Starting Nginx in HTTP-only mode for domain verification..."
cp nginx/conf.d/default.conf nginx/conf.d/default.conf.bak
cp nginx/conf.d/init.conf nginx/conf.d/default.conf
docker compose up -d nginx
sleep 3

echo ""
echo "==> Requesting certificate for team25153.com + www.team25153.com..."
docker compose run --rm certbot certonly \
    --webroot \
    --webroot-path=/var/www/certbot \
    --email "$EMAIL" \
    --agree-tos \
    --no-eff-email \
    -d team25153.com \
    -d www.team25153.com

echo ""
echo "==> Requesting certificate for lms.team25153.com..."
docker compose run --rm certbot certonly \
    --webroot \
    --webroot-path=/var/www/certbot \
    --email "$EMAIL" \
    --agree-tos \
    --no-eff-email \
    -d lms.team25153.com

echo ""
echo "==> Restoring full HTTPS Nginx config..."
cp nginx/conf.d/default.conf.bak nginx/conf.d/default.conf
rm nginx/conf.d/default.conf.bak

echo ""
echo "==> Restarting Nginx with SSL enabled..."
docker compose restart nginx

echo ""
echo "✓ SSL setup complete! Both domains are now HTTPS."
