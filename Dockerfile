# Build stage for Node.js
FROM node:14.21.3-alpine AS node

# Install build dependencies with improved support for image processing tools
RUN apk add --no-cache \
    autoconf \
    automake \
    build-base \
    libtool \
    nasm \
    libpng-dev \
    libjpeg-turbo-dev \
    python3 \
    git \
    g++ \
    make \
    optipng \
    pngquant \
    pkgconfig \
    zlib-dev \
    libpng \
    libpng-static

# Set npm config to avoid permission issues and increase memory limit
RUN npm config set unsafe-perm true
RUN npm config set cache-min 9999999
RUN npm config set network-timeout 600000
RUN npm config set loglevel verbose

# Install build tools globally
RUN npm install -g cross-env webpack

WORKDIR /var/www/hormozgroup.ir

# Copy only package files first for better layer caching
COPY package*.json ./

# Skip all binary installations for image optimization packages
ENV SKIP_MOZJPEG=true
ENV SKIP_MOZJPEG_BINARY=true
ENV SKIP_GIFSICLE=true
ENV SKIP_GIFSICLE_BINARY=true
ENV SKIP_PNGQUANT=true
ENV SKIP_PNGQUANT_BINARY=true
ENV SKIP_OPTIPNG=true
ENV SKIP_OPTIPNG_BINARY=true
ENV SKIP_JPEGTRAN=true
ENV SKIP_JPEGTRAN_BINARY=true
ENV NODE_ENV=production

# Install with minimal dependencies and no rebuild
RUN NODE_OPTIONS=--max_old_space_size=4096 npm install --legacy-peer-deps --no-optional --production=false --no-bin-links

# Copy the rest of the application
COPY . .

# Use simpler direct webpack command instead of npm scripts
RUN NODE_OPTIONS=--max_old_space_size=4096 node_modules/.bin/webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js

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
