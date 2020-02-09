init: docker-build app-env app-composer

docker-down:
	docker-compose down --remove-orphans

docker-up:
	docker-compose up -d

docker-reload: docker-down docker-up

docker-build:
	docker-compose up --build -d

docker-in:
	docker-compose exec app-cli bash

app-env:
	docker-compose exec app-cli rm -f .env
	docker-compose exec app-cli ln -sr .env.example .env

app-composer:
	docker-compose exec app-cli composer install

load-xml:
	docker-compose exec app-cli php bin/app.php app:load-weather xml

load-json:
	docker-compose exec app-cli php bin/app.php app:load-weather json
