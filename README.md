## Пакет для Laravel 5.5+

*Установка:*

1. Указываем в файле composer.json зависимость от пакета и адрес его репозитория:

    
    <pre>"require": {
    	"akoval777/request-to-ts": "dev-master",
    }

    ...

    "repositories": [
	    {
	        "type": "vcs",
	        "url": "https://github.com/akoval777/request-to-ts"
	    }
    ]</pre>

2. Устанавливаем пакет с помощью команды `composer update`
3. Выполняем миграции: `php artisan migrate`
4. Копируем файл конфигурации пакета в основное приложение: `php artisan vendor:publish`

*Настройка времени удаления записей:*

В файле конфигурации *(config/request_to_ts.php)* установить опции *delete_after* нужное значение (по умолчанию записи удаляются через 12 часов после создания)
