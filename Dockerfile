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

# Stage 1: Node build (ถ้าอยาก build assets แบบ production)
FROM php AS node-build
RUN apk add --no-cache nodejs npm
RUN npm install && npm run build

# Stage 2: nginx
FROM nginx:alpine
COPY --from=php /var/www /var/www
COPY default.conf /etc/nginx/conf.d/default.conf
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]