FROM php:8.2.7

RUN <<EOF
apt-get update
apt-get install -y libzip-dev libpng-dev
docker-php-ext-configure gd --with-freetype --with-jpeg
docker-php-ext-install -j$(nproc) gd
docker-php-ext-install -j$(nproc) zip
EOF
