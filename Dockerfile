FROM php:7.4-apache

RUN pear install Mail

WORKDIR /var/www/html

COPY --chown=www-data:www-data . .

RUN echo 'alias ll="ls -la --color"' > ~/.bashrc
