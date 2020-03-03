# Основываемся на контейнере версии 7.2-fpm
FROM php:7.4-fpm

ARG USER_ID
ARG GROUP_ID

# Устанавливаем необходимые для расширений пакеты
RUN apt-get update && apt-get install -y libcurl4-openssl-dev \
#        zip unzip \
        mc \
        curl \
        wget \
        --no-install-recommends

# Устанавливаем расширения intl, PDO MySQL, bcmath, xsl, zip, mysqli, soap
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

#RUN usermod -u ${USER_ID} www-data && groupmod -g ${GROUP_ID} www-data

ENTRYPOINT ["docker-php-entrypoint"]
CMD ["php-fpm"]