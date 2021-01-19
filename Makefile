
server:
	cp .env.example .env
	composer install
	php artisan key:generate
	npm install
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve

config-git-everthon:
	git config --global user.name "everthonh"
	git config --global user.email "everthon.henrique.75@gmail.com"

config-git-huanderson:
	git config --global user.name "huandersonlima"
	git config --global user.email "mattewlima16@gmail.com"

config-git-suelen:
	git config --global user.name "suelensalvino"
	git config --global user.email "suelensalvinocs@gmail.com"

config-git-danilo:
	git config --global user.name "danilom2"
	git config --global user.email "danilo280102@gmail.com"

config-git-fabio:
	git config --global user.name "fabiomouradefraga"
	git config --global user.email "fabiomouradefraga@gmail.com"

config-git-edu:
	git config --global user.name "edukaze"
	git config --global user.email "eduardo.bezerra.kaze@gmail.com"

config-git-desiree:
	git config --global user.name "desireefernandes"
	git config --global user.email "desireefernandes00@gmail.com"

config-git-cleicy:
	git config --global user.name "cleicykerolim"
	git config --global user.email "cleicykerolim@gmail.com"

