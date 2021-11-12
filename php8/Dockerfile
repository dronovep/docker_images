FROM php-fpm
RUN apk update && \
    apk add php8-pdo_pgsql && \
    cp /usr/lib/php8/modules/pdo_pgsql.so  /usr/local/lib/php/extensions/no-debug-non-zts-20200930



