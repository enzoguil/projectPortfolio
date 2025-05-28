FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
        sqlite-dev \
        nodejs \
        npm \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app