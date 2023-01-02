# Nodejs Docker
# FROM node:15

# WORKDIR /app

# COPY package.json .

# RUN npm install

# COPY . .

# EXPOSE 4000

FROM php:8.1

COPY composer.json composer.lock /var/www/

WORKDIR /var/www/

RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    locales \
    zip \
    vim \
    unzip \
    git \
    curl

# clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# install extensions

RUN docker-php-ext-install mysqli pdo pdo_mysql

# install composer

RUN curl -s5 https://getcomposer.org/installer | php -- --install--dir=/local/bin --filename=composer

WORKDIR /app

COPY . .

CMD [ "php-fpm" ]
