FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo pdo_mysql mysqli mbstring zip exif pcntl gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/web2

RUN mkdir -p /var/www/web2 \
    && chown -R www-data:www-data /var/www/web2 \
    && chmod -R 755 /var/www/web2

USER www-data

EXPOSE 9000

CMD ["php-fpm"]