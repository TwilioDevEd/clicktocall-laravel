# Dockerfile for clicktocall-laravel

# Use PHP 5 base image
FROM php:5-cli

# Install mcrypt and zip PHP extensions
RUN apt-get update && apt-get install -y libmcrypt-dev zlib1g-dev \
    && docker-php-ext-install mcrypt zip \
    && apt-get clean

# Install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Copy over source code
COPY . /usr/src/app
WORKDIR /usr/src/app

# Install dependencies
RUN composer install

# Run artisan server (accept requests from all hosts)
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
