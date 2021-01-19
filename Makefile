
server:
	cp .env.example .env
	composer install
	php artisan key:generate
	npm install
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve
