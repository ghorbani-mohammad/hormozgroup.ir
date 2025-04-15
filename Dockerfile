# Build stage for Node.js
FROM node:14.21.3-alpine AS node

# Install build dependencies
RUN apk add --no-cache \
    autoconf \
    automake \
    build-base \
    libtool \
    nasm \
    libpng-dev \
    python3

WORKDIR /var/www/hormozgroup.ir
COPY package*.json ./
RUN npm install --legacy-peer-deps
COPY . .
RUN npm run production

# PHP stage
FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/hormozgroup.ir
COPY . .
COPY --from=node /var/www/hormozgroup.ir/public/js /var/www/hormozgroup.ir/public/js
COPY --from=node /var/www/hormozgroup.ir/public/css /var/www/hormozgroup.ir/public/css

ENV COMPOSER_ALLOW_SUPERUSER 1
RUN composer update --with-all-dependencies --ignore-platform-req=ext-exif
RUN composer install --ignore-platform-req=ext-exif
RUN composer dump-autoload
