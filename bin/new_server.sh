# Forge (https://forge.laravel.com) is doing most of the work for us
# but there are some scripts and updates that we need to make after
# forge is done running.  Run this script before you try to run
# the site and this will get everything going for you

npm install gulp
npm install bower
npm install
bower install

php artisan migrate:install
php artisan migrate --force

gulp clean
gulp compile --production

