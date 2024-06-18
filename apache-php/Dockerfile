#apache php enable

FROM php:8.2.20-apache

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY . .
 
EXPOSE 80

CMD ["apache2-foreground"]