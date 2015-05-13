# You should be kicking off a build through Forge (https://forge.laravel.com)
# but if you cannot do that for some crazy reason you can use this script.
#

php artisan down

git stash
git reset --hard
git pull --rebase origin master

composer install --no-interaction --no-dev --prefer-dist

php artisan clear-compiled
php artisan cache:clear
php artisan config:clear
php artisan route:clear

npm install
gulp clean
gulp compile --production

php artisan migrate --force

php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan config:cache
php artisan route:cache
php artisan optimize

php artisan up
