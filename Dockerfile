# Stage 0: Base image PHP 8.5 + FPM Alpine
FROM php:8.5-fpm-alpine

# ติดตั้ง system dependencies
RUN apk add --no-cache \
    bash \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    oniguruma-dev \
    nodejs npm \
    postgresql-dev \
    icu-dev \
    zlib-dev \
    libxml2-dev \
    make \
    g++ \
    autoconf \
    bash \
    shadow

# ติดตั้ง PHP extensions ที่ Laravel ต้องใช้
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip intl xml

# ติดตั้ง Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ตั้ง working directory
WORKDIR /var/www

# copy source code เข้า container
COPY . .

# ติดตั้ง Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# ติดตั้ง Node dependencies และ build front-end assets
RUN npm install && npm run build

# Expose port สำหรับ Laravel
EXPOSE 8000

# คำสั่งรัน Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]