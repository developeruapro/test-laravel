# alpine
FROM php:7.3.5-fpm

ADD ./config/resolv.conf /etc/

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
       locales \
       git \
       nginx \
       icu-devtools \
       libicu-dev \
       libicu57 \
       libxml2-dev \
       libxslt1-dev \
       zlib1g-dev \
       libpng-dev \
       zip \
       libzip-dev \
    && pecl install xdebug \
    && apt-get autoremove --purge \
    && apt-get -y clean \
    && rm -rf /var/lib/apt/lists/*

RUN  apt-get update && apt-get install -y cron

# PHP extensions
RUN docker-php-ext-install \
    opcache \
    pdo_mysql \
    mysqli

RUN docker-php-ext-enable \
    opcache \
    xdebug

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www

# Configuring the server
ADD ./config/php/conf.d/php.override.ini /usr/local/etc/php/conf.d/
RUN touch /var/log/php_errors.log && chmod 777 /var/log/php_errors.log
ADD ./config/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/
RUN rm -f /usr/local/etc/php-fpm.d/zz-docker.conf
RUN touch /var/log/fpm-php.www.log && chmod 777 /var/log/fpm-php.www.log
ADD ./config/nginx/site-enabled/default /etc/nginx/sites-enabled/
RUN /etc/init.d/nginx restart
ADD ./config/crontabs /persistent/crontabs

# Setup cron
RUN rm -rf /var/spool/cron/crontabs \
    && ln -s /persistent/crontabs /var/spool/cron/crontabs \
    && /etc/init.d/cron restart

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

EXPOSE 80
EXPOSE 9000

CMD ["sh", "-c", "/etc/init.d/cron start; /etc/init.d/nginx start; php-fpm --nodaemonize"]
