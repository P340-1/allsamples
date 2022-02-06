Пример реализации REST API на Laravel.
=========

### Установка
1. Установить на веб-сервер.
2. Установить CURL ( Postman , SoapUI ).
3. Протестировать API:
        curl -X GET http://restlaravel/api/games -i
        curl -X GET http://restlaravel/api/games/1 -i

### Источник
        https://habr.com/ru/post/441946/

### Последовательность выполненных действий
1. Установка Laravel.
        composer create-project --prefer-dist laravel/laravel ProjectName

2. Настроить подключение к БД в файле .env

3. Создать модель, контроллер, миграцию.
        php artisan make:model Game -mrc

4. Создать таблицу БД (редактировать миграцию), выполнить миграцию, добавить пару записей.
        php artisan migrate

5. Создать request для валидации.
        php artisan make:request GameRequest

6. Создать собственные варианты описания ошибок

7. Отредактировать контроллер

8. Отредактировать модель

9. Создать и отредактировать middleware
        php artisan make:middleware ForceJsonResponse

10. Настроить маршруты.