1. docker-compose build
2. docker-compose up -d
3. зайти в adminer (http://localhost:8090/) для проверки подключения к БД
   сервер: mysql
   Имя пользователя: root
   Пароль: root
   База данных: laravel
4. перейти в директорию - backend и в консоли вызвать команду - php artisan migrate для миграции таблиц в БД
5. для импорта данных была создана консольная команда - ImportExcelCommand.php. Данная команда смотрит в директорию - public/csv в ожидании файла - data.csv. Для ее вызова следует воспользоваться следующей командой в консоли - php artisan import:excel
6. перед обращением к API требуется в файле .env сменить в настройках БД DB_HOST с localhost на mysql
7. обращение к API
   вывод всех записей - http://localhost:8000/api/cars/
   вывод одной конкретной записи http://localhost:8000/api/cars/id
