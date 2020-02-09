## weather_test

###Деплой
`make init`
или
1. `docker-compose up --build -d`
2. `docker-compose exec app-cli composer install`
3. скопировать .env.example как .env

WEATHERBIT_APY_KEY - токен для сервиса погоды Weatherbit

###Выгрузка погоды
`make load-xml` - для выгрузки xml  
`make load-json` - для выгрузки json  
или  
`php bin/app.php app:load-weather [xml|json]` внутри контейнера  

Файлы выгрузок находятся в папке files