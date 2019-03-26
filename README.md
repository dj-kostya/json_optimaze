# Демо: JSON-ресурсы

Список пользователей, выдаваемый через ресурсы Laravel

## Установка зависимостей
```
 composer install
```

## Инициализация БД

```
 touch storage/app/db.sqlite 
 composer migrate
 composer db:seed
```

## Запуск в режиме сервера

```
 php artisan serve
```

## URL-ы для исследования:

 - JSON: http://127.0.0.1:8000/api/users
 - JSON+debugbar: http://127.0.0.1:8000/api/users_debug
 - JSON_V2+debugbar: http://127.0.0.1:8000/api/users_debug_v2
 

