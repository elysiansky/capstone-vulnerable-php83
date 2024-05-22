# docker/php83/Dockerfile
FROM php:8.3-fpm-alpine

# Install necessary extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy the application files
COPY /src /var/www/html/

# Expose the port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]