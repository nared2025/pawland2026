# Stage 0: PHP 8.5 FPM + Composer
FROM php:8.5-fpm-alpine AS php

# ติดตั้ง dependencies และ PHP extensions
RUN apk add --no-cache \
    bash git curl zip unzip libzip-dev oniguruma-dev \
    postgresql-dev icu-dev zlib-dev libxml2-dev make g++ autoconf shadow

RUN docker-php-ext-install pdo pdo_pgsql mbstring zip intl xml

# ติดตั้ง Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ตั้ง working directory และ copy source
WORKDIR /var/www
COPY . .

# ติดตั้ง Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Stage 1: (Optional) build Node assets ถ้าใช้ npm/laravel-mix
# ถ้าไม่มี front-end build ให้คอมเมนต์ออก
# RUN apk add --no-cache nodejs npm
# RUN npm install && npm run build

# Stage 2: Nginx
FROM nginx:alpine

# Copy source code จาก stage php
COPY --from=php /var/www /var/www

# Copy Nginx config ของเรา
COPY default.conf /etc/nginx/conf.d/default.conf

# เปิด port 80
EXPOSE 80

# รัน Nginx แบบ foreground
CMD ["nginx", "-g", "daemon off;"]