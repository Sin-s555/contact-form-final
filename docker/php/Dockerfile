FROM php:8.0-fpm

# 必要な拡張をインストール
RUN apt-get update && apt-get install -y \
    zip unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip

# Composerインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
