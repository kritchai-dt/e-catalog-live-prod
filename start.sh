#!/usr/bin/env bash
set -e

export PORT=${PORT:-10000}

# ปรับ php.ini แบบย่อ ถ้าต้องการ
# echo -e "date.timezone=Asia/Bangkok\nupload_max_filesize=32M\npost_max_size=32M" > /usr/local/etc/php/conf.d/custom.ini

# เตรียมโฟลเดอร์อัปโหลดถาวรที่ mount ไว้ที่ /var/data/uploads
mkdir -p /var/data/uploads
if [ -d "/var/www/html/upload" ] && [ ! -L "/var/www/html/upload" ]; then
  mv /var/www/html/upload/* /var/data/uploads/ 2>/dev/null || true
  rm -rf /var/www/html/upload
fi
ln -sfn /var/data/uploads /var/www/html/upload

php-fpm -D
nginx -g "daemon off;"