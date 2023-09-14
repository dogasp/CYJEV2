FROM php:7.4-fpm-alpine

ARG uid
ARG gid
ENV COMPOSER_CACHE_DIR=/var/www/.cache/composer

RUN set -ex \
    && apk update && apk upgrade \
    && apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS \
    && docker-php-ext-install bcmath pdo_mysql \
    && pecl install apcu redis \
    && docker-php-ext-enable apcu redis \
    && apk del .phpize-deps

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=phpunit/phpunit:latest /usr/local/bin/phpunit /usr/bin/phpunit

RUN addgroup -g ${gid} _www \
    && adduser -D -u ${uid} -G _www _www \
    && addgroup _www www-data \
    && chown -R _www:_www /home/_www

WORKDIR /var/www
USER ${uid}