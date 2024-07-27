# docker/php83/Dockerfile
FROM php:8.3-fpm-alpine

RUN apk update && apk add --no-cache procps

# Install necessary extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy the application files
COPY /src /var/www/html/

# Copy the www.conf file to the PHP-FPM configuration directory
COPY /docker/php83/www.conf /usr/local/etc/php-fpm.d/www.conf

# Copy the entrypoint script
COPY /docker/php83/entrypoint.sh /entrypoint.sh

# Make the entrypoint script executable
RUN chmod +x /entrypoint.sh

# Expose the port
EXPOSE 9000

# Set the entrypoint
ENTRYPOINT ["/entrypoint.sh"]
