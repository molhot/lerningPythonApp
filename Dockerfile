FROM php:8.1-apache-bullseye

# 基本ツール & PHP 拡張
RUN apt-get update \
 && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    vim \
    iputils-ping \
    net-tools \
    sudo \
    gnupg \
    curl \
 && docker-php-ext-install zip pdo_mysql

# Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
 && apt-get install -y nodejs \
 && npm install -g npm@8.12.1

# Composer
COPY --from=composer:2.4.1 /usr/bin/composer /usr/bin/composer

# Apache モジュール有効化
RUN a2enmod rewrite

# Laravel 用 Apache 設定を追加
COPY laravel.conf /etc/apache2/sites-available/laravel.conf
RUN a2dissite 000-default && a2ensite laravel

# 作業ディレクトリ
WORKDIR /var/www/html

# 初回起動時 Laravel を自動作成
CMD ["/bin/bash", "-c", "\
    if [ ! -f /var/www/html/artisan ]; then \
        composer create-project laravel/laravel .; \
        chown -R www-data:www-data /var/www/html; \
        chmod -R 755 /var/www/html; \
        mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache; \
        chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache; \
        chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache; \
    fi && apache2-foreground"]
