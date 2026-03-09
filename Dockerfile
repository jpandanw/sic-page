# syntax=docker/dockerfile:1.7

# Laravel app image (PHP-FPM + built assets)
FROM php:8.4-fpm-alpine AS base

WORKDIR /var/www/html

# System deps
RUN apk add --no-cache \
    bash \
    curl \
    git \
    icu-dev \
    libzip-dev \
    oniguruma-dev \
    sqlite \
    sqlite-dev \
    unzip \
    zip \
    && docker-php-ext-install -j$(nproc) \
        intl \
        pdo \
        pdo_mysql \
        pdo_sqlite \
        zip

# Optional: OPcache for production
RUN docker-php-ext-install -j$(nproc) opcache

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- Vendor build ----------
FROM base AS vendor

COPY composer.json composer.lock ./
RUN composer install \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --no-dev \
    --optimize-autoloader \
    --classmap-authoritative

# ---------- Frontend build ----------
FROM node:22-alpine AS frontend

WORKDIR /app
COPY package.json package-lock.json* bun.lock* ./
RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi
COPY vite.config.js ./
COPY resources ./resources
RUN npm run build

# ---------- Production runtime ----------
FROM base AS production

# Copy app code
COPY . .

# Copy built vendor + frontend assets
COPY --from=vendor /var/www/html/vendor ./vendor
COPY --from=frontend /app/public/build ./public/build

# Laravel writable dirs
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Recommended env defaults
ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr

EXPOSE 9000
CMD ["php-fpm"]
