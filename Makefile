docker-down:
	docker-compose down --remove-orphans

docker-up:
	docker-compose up -d

docker-reload: docker-down docker-up

docker-build:
	docker-compose up --build -d

docker-in:
	docker-compose exec app-cli bash

app-permissions:
	sudo chmod -R 777 var

app-env:
	docker-compose exec app-cli rm -f .env
	docker-compose exec app-cli ln -sr .env.example .env

app-composer:
	docker-compose exec app-cli composer install
