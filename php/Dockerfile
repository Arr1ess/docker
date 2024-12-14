FROM php:8.1-fpm

# Установка необходимых зависимостей для PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Установка Redis расширения
RUN pecl install redis && docker-php-ext-enable redis

# Установка рабочей директории
WORKDIR /var/www/html