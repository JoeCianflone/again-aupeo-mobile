# You should be kicking off a build through Forge (https://forge.laravel.com)
# but if you cannot do that for some crazy reason you can use this script.
#

php artisan down

# You shouldn't be making any changes on the server to begin with
# but if you do, we'll just clear them out of the way for you :)
git stash
git reset --hard
git pull --rebase origin master

php artisan migrate:install
php artisan migrate

npm install
bower install

gulp clean
gulp compile --production

php artisan optimize
php artisan up
