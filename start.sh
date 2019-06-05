composer install
cp .env.example .env
php artisan key:generate

sed -i 's/DB_DATABASE=homestead/DB_DATABASE=zoom/g' .env
sed -i 's/DB_USERNAME=homestead/DB_USERNAME=root/g' .env
sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=/g' .env

echo APP_SECURE=true >> .env

OPTIONS="-u root"
CMD="echo 'create database zoom;' | mysql $OPTIONS -N"
(`eval $CMD`)
(`eval "exit;"`)

php artisan migrate:refresh --seed

npm install

php artisan serve --port=8080