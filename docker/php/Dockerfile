FROM php:8.0-fpm

RUN apt update \
    && apt install -y zlib1g-dev mariadb-client vim libzip-dev \
    && docker-php-ext-install zip pdo_mysql \
    && apt install -y git

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www