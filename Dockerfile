# Base PHP
FROM php:8.5-fpm-alpine

RUN apk add --no-cache bash git curl zip unzip libzip-dev oniguruma-dev \
    postgresql-dev icu-dev zlib-dev libxml2-dev make g++ autoconf shadow nginx

RUN docker-php-ext-install pdo pdo_pgsql mbstring zip intl xml
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN composer install --no-dev --optimize-autoloader

# Copy Nginx config
COPY default.conf /etc/nginx/conf.d/default.conf

# สั่งรัน PHP-FPM + Nginx พร้อมกัน
EXPOSE 80
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]