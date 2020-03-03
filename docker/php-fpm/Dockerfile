# Основываемся на контейнере версии
FROM php:7.4-fpm

ARG USER_ID
ARG GROUP_ID

# Устанавливаем необходимые для расширений пакеты
RUN apt-get update && apt-get install -y libcurl4-openssl-dev \
        mc \
        curl \
        wget \
        --no-install-recommends

# Устанавливаем расширения
RUN pecl channel-update pecl.php.net \
    && docker-php-ext-install pdo_mysql fileinfo curl  \
    && pecl install apcu \
    && pecl install xdebug \
    && pecl install igbinary \
    && docker-php-ext-enable apcu \
    && docker-php-ext-enable igbinary \
    && docker-php-ext-enable xdebug

# удаляем папку с конфигами по умолчанию для php-fpm
RUN rm -rf /usr/local/etc/php-fpm.d
# копируем конфиги из папки с проектов в контейнер
COPY ./pools /usr/local/etc/php-fpm.d
ADD ./php.ini /usr/local/etc/php/
ADD ./php-fpm.conf /usr/local/etc/php-fpm.conf
COPY ./docker-php-entrypoint /usr/local/bin/

# устанавливаем composer в контейнер
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/bin

ENTRYPOINT ["docker-php-entrypoint"]

CMD ["php-fpm"]