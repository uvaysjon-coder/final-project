FROM php:8.1-fpm
USER root
# Set working directory
WORKDIR /var/www

# Add docker php ext repo
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions mbstring pdo_mysql zip exif pcntl gd memcached

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    lua-zlib-dev \
    libmemcached-dev \
    nginx

RUN apt-get update && apt-get install -y mariadb-client && rm -rf /var/lib/apt
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
# Install supervisor
RUN apt-get install -y supervisor

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN mkdir /var/docker
# Copy code to /var/www
COPY --chown=www:www-data ./application /var/www
COPY --chown=www:www-data ./docker /var/docker
COPY ./.env /var/www/.env
# add root to www group

RUN chmod 775 /var/www/storage
RUN chmod 775 /var/www/bootstrap/cache

# Copy nginx/php/supervisor configs

RUN cp /var/docker/supervisor.conf /etc/supervisord.conf
RUN cp /var/docker/php.ini /usr/local/etc/php/conf.d/app.ini
RUN cp /var/docker/nginx.conf /etc/nginx/sites-enabled/default

# PHP Error Log Files
RUN mkdir /var/log/php
RUN touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

# Deployment steps
RUN composer install --optimize-autoloader
RUN npm install
RUN chmod +x /var/docker/run.sh

EXPOSE 80
ENTRYPOINT ["/var/docker/run.sh"]
