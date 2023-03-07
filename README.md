How to run :
1. install all dependencies (npm i && composer install)
2. setup your db and do migrate (php artisan:migrate)
3. open https://cors-anywhere.herokuapp.com/ and click "Request temporary" to bypass CORS
4. add  VITE_APP_WEATHER=2135a1f2258ebdcf65e42628d1da8ebf to .env
4. open http://localhost:8000/weather

- this page limited, only Jakarta city.
- Weather API by https://openweathermap.org/api
- VITE_APP_WEATHER is from https://openweathermap.org/api , you can generete by yourself
