#!/usr/bin/env bash
set -e

# Render จะส่ง PORT มา เราตั้งค่า default = 10000 เผื่อไว้
: "${PORT:=10000}"

# ทำคอนฟิกจริงจากเทมเพลต โดยแทนค่า ${PORT}
envsubst '${PORT}' < /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf

# เตรียมโฟลเดอร์อัปโหลดถาวร (ถ้าใช้ Persistent Disk)
mkdir -p /var/data/uploads
if [ -d "/var/www/html/upload" ] && [ ! -L "/var/www/html/upload" ]; then
  mv /var/www/html/upload/* /var/data/uploads/ 2>/dev/null || true
  rm -rf /var/www/html/upload
fi
ln -sfn /var/data/uploads /var/www/html/upload

php-fpm -D
nginx -g "daemon off;"