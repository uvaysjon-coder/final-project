#!/bin/sh

cd /var/www
chmod -R 777 storage
chmod -R 777 bootstrap/cache
# php artisan migrate:fresh --seed
php artisan cache:clear
php artisan route:cache
php artisan key:generate

npm run build

php artisan migrate

/usr/bin/supervisord -c /etc/supervisord.conf
