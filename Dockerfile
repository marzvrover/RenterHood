FROM php:7.2.2

RUN apt-get update -y && apt-get install -y \
	openssl \
	zip \
	unzip \
	git \
	mysql-client \
	build-essential \
	nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install \
	pdo \
	mbstring

WORKDIR /app
COPY . /app

RUN composer install
RUN php artisan storage:link

CMD php artisan serve --host=0.0.0.0 --port=80
EXPOSE 80
