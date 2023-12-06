# Инструкция по открытию проекта
1. Установить Composer
2. В терминале VS Code вводим команду 'composer update'.
3. Поменять имя env.example на .env
4. Ввести команду в консоли: php artisan key:generate
5. Ввести команду в консоли: php artisan migrate
6. Ввести команду в консоли: php artisan storage:link  
7. Ввести команду в консоли: php artisan serve
8. Команда для запуска сидов php artisan db:seed

Данные по БД:

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=application
- DB_USERNAME=root
- DB_PASSWORD=

- URL страницы менеджера: http://127.0.0.1:8000/manager
- Логин: manager@example.com
- Пароль: jjemnfz12

- Ссылка по установке JWT Token: https://jwt-auth.readthedocs.io/en/develop/laravel-installation/
