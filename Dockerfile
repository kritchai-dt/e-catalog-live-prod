FROM php:8.2-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql mysqli && apk add --no-cache nginx bash curl

WORKDIR /var/www/html
COPY . /var/www/html

COPY nginx.conf /etc/nginx/nginx.conf
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 10000
CMD ["/start.sh"]
