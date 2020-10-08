FROM php:7.3-fpm 
COPY php.ini /usr/local/etc/php/conf.d/php.ini
ENV APP_ROOT /var/www
ENV LANG ja_JP.utf8

RUN apt-get update && \
	 apt-get install -y zlib1g-dev mariadb-client libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
	 docker-php-ext-install zip pdo_mysql  && \
	 docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr && \
	 docker-php-ext-install -j$(nproc) gd

COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www
RUN composer global require "laravel/installer"
RUN composer global require "laravelcollective/html"