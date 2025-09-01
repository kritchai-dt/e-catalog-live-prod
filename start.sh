#!/usr/bin/env bash
set -e
export PORT=${PORT:-10000}

mkdir -p /var/data/uploads
if [ -d "/var/www/html/upload" ] && [ ! -L "/var/www/html/upload" ]; then
  mv /var/www/html/upload/* /var/data/uploads/ 2>/dev/null || true
  rm -rf /var/www/html/upload
fi
ln -sfn /var/data/uploads /var/www/html/upload

php-fpm -D
nginx -g "daemon off;"