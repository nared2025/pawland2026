# Dockerfile Laravel + Node + PHP 8.2
FROM php:8.2-fpm

# ติดตั้ง dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    libzip-dev \
    zip \
    npm \
    && docker-php-ext-install pdo pdo_pgsql zip

# ติดตั้ง Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ตั้ง working directory
WORKDIR /var/www

# copy project
COPY . .

# ติดตั้ง PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# ติดตั้ง Node dependencies และ build assets
RUN npm install && npm run build

# expose port
EXPOSE 8080

# start Laravel
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]