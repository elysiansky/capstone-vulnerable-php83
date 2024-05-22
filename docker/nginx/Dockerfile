# docker/nginx/Dockerfile
FROM nginx:alpine

# Copy custom Nginx configuration
COPY /docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf

# Copy the application files
COPY /src /var/www/html/
