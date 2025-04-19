# Build stage for Node.js
FROM node:14.21.3-alpine AS node

# Install build dependencies - adding more dependencies for image processing
RUN apk add --no-cache \
    autoconf \
    automake \
    build-base \
    libtool \
    nasm \
    libpng-dev \
    python3 \
    git \
    g++ \
    make \
    libjpeg-turbo-dev \
    optipng \
    pngquant

# Set npm config to avoid permission issues and increase memory limit
RUN npm config set unsafe-perm true
RUN npm config set cache-min 9999999
RUN npm config set network-timeout 600000

# Install cross-env globally to avoid path issues
RUN npm install -g cross-env

WORKDIR /var/www/hormozgroup.ir
COPY package*.json ./

# Install with --force to bypass peer dependency issues and increase memory limit
RUN NODE_OPTIONS=--max_old_space_size=4096 npm install --legacy-peer-deps --no-optional --force

COPY . .

# Fix potential node_modules/.bin symlink issues
RUN npm rebuild

# Build with increased memory limit
RUN NODE_OPTIONS=--max_old_space_size=4096 npm run production || NODE_OPTIONS=--max_old_space_size=4096 NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js

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
