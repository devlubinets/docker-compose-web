FROM php:7.4.33-fpm

### Common additional packages
# Sys packages
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    libicu-dev \
    libpng-dev \
    libjpeg-dev

### PHP's modules
# Intl
RUN docker-php-ext-install intl
# Zip
RUN docker-php-ext-install zip
# PDO
RUN docker-php-ext-install pdo pdo_mysql
# GD
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install gd

# Install Xdebug 2.9.8 (compatible with PHP 7.4)
RUN pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug

# Create log directory
RUN mkdir -p /var/www/log
RUN touch /var/www/log/xdebug.log

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Add user for the Laravel application
RUN groupadd -g 1000 ad
RUN useradd -u 1000 -ms /bin/bash -g ad ad

# Set the working directory
WORKDIR /app
USER ad
