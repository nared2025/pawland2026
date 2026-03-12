# Stage 0: PHP 8.5 FPM
FROM php:8.5-fpm-alpine AS php

RUN apk add --no-cache \
    bash git curl zip unzip libzip-dev oniguruma-dev \
    postgresql-dev icu-dev zlib-dev libxml2-dev make g++ autoconf shadow

RUN docker-php-ext-install pdo pdo_pgsql mbstring zip intl xml

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Stage 1: Node build (optional, production assets)
FROM php AS node-build
RUN apk add --no-cache nodejs npm
WORKDIR /var/www
COPY . .
RUN npm install && npm run build

# Stage 2: Final image with Nginx + PHP-FPM
FROM php:8.5-fpm-alpine
RUN apk add --no-cache nginx bash

# copy Laravel + built assets
COPY --from=node-build /var/www /var/www

# Nginx config
COPY default.conf /etc/nginx/conf.d/default.conf

# expose port
EXPOSE 80

# Start both PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]