#!/bin/bash
echo ==== START.SH ====
set -x

php artisan config:cache

if ! [[ -e initialised ]]; then
  php artisan storage:link
  php artisan migrate
  php artisan db:seed
  touch initialised
fi

rsync --links -r /var/www/ /var/sharedwww/
cd /var/sharedwww

ln -s /var/run/secrets/secret-env /var/sharedwww/.env
chmod +r /var/sharedwww/.env

php-fpm
