# Imatge base amb Apache i PHP
FROM php:8.2-apache

# Copia els fitxers del projecte al directori del servidor web
COPY . /var/www/html/

# Dona permisos correctes
RUN chown -R www-data:www-data /var/www/html

# Exposa el port 80
EXPOSE 80
