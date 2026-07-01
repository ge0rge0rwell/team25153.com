#!/bin/bash
set -e

echo "=== Cartesian Robotics Team 25153 ==="
echo ""

# Check Docker
if ! command -v docker &>/dev/null; then
  echo "ERROR: Docker not installed. Install Docker Desktop from https://docker.com and retry."
  exit 1
fi

if ! docker info &>/dev/null; then
  echo "ERROR: Docker daemon not running. Start Docker Desktop and retry."
  exit 1
fi

echo "Starting services..."
docker compose -f docker-compose.yml -f docker-compose.local.yml up -d --build

echo ""
echo "Waiting for Moodle to be ready (this can take 1-2 minutes on first run)..."
until curl -sf http://localhost:8081 >/dev/null 2>&1; do
  printf "."
  sleep 5
done

echo ""
echo ""
echo "=== Ready ==="
echo "  Site:         http://localhost:4000"
echo "  Moodle admin: http://localhost:8081"
echo "  Admin login:  iatakan / 123456"
echo ""
