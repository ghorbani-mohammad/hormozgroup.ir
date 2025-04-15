FROM php:7.4-fpm-alpine

# Install Node.js and npm
RUN apk add --update nodejs npm

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/hormozgroup.ir
COPY . .
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN composer update --with-all-dependencies --ignore-platform-req=ext-exif
RUN composer install --ignore-platform-req=ext-exif
RUN composer dump-autoload

# Install npm dependencies and build assets
RUN npm install --legacy-peer-deps
RUN npm run production
