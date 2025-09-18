# Dockerfile (en /home/danna/tallergithub)
FROM php:8.3-fpm

# Paquetes necesarios del sistema (incluye build tools y pkg-config)
RUN apt-get update && apt-get install -y \
    git curl unzip zip \
    pkg-config build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
 && rm -rf /var/lib/apt/lists/*

 RUN a2enmod rewrite

 RUN docker-php-ext-install pdo_mysql zip

 ENV APACHE_DOCUMENT_ROOT /var/www/public
 RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
 RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install


RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache


