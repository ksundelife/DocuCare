1 спуливаем мастер ветку https://github.com/camelot1399/c
2 Обязательно установить приложение докер

3 Выполняем sudo chmod a+x init.sh
4 Выполняем sudo chown -R www-data:www-data storage/
5 Выполнить sudo chmod -R a+x storage/
6 Запускаем ./init.sh
После этого Вы должны оказаться внутри контейнера agile-php-fpm под юзером developer
Внутри контейнера:
 1 Запускаем: composer install
 2 Запускаем: npm install && npm run dev
 3 Запускаем: php artisan migrate:fresh --seed

Проверьте наличие файла: .evn (если отсутствует, создать по подобию .env.example)
Порт базы данных 3306, прописывается в .env и .env.example

Внимание, если при запуске No Application Encryption Key Has Been Specified
Необходимо сделать: php artisan key:generate



Сайт доступен по адресу: http://localhost
