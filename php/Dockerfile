FROM php:8.2-apache

# Apache mod_rewrite 有効化
RUN a2enmod rewrite

# PHP拡張 & 必要パッケージ
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql gd

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Apache DocumentRootを /public に変更
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 初回起動時に Laravel プロジェクトを作成するスクリプト
CMD ["/bin/bash", "-c", "\
    if [ ! -f /var/www/html/artisan ]; then \
        composer create-project laravel/laravel .; \
    fi && \
    apache2-foreground"]
