# Инструкция по открытию проекта
-Установить Composer
-В терминале VS Code вводим команду 'composer update'.
-Поменять имя env.example на .env
-Ввести команду в консоли: php artisan key:generate

Данные по БД:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=application
DB_USERNAME=root
DB_PASSWORD=

-Ввести команду в консоли: php artisan migrate
-Ввести команду в консоли: php artisan serve
URL страницы менеджера: http://127.0.0.1:8000/manager
Логин: manager@example.com
Пароль: jjemnfz12
