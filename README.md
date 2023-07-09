<h1 align="center">Тестовое задание для ПСК Дом</h1>
<h2 align="center">Кандидат - Цуркан Максим</h2>

API key: `Ghji2-2asdAda_adALIOKsa2121`
<p>Также api ключ можно поменять в файле config/api_tokens.php</p>

<h3>Используемые технологии:</h3>

`php 8.0.2`
`laravel 9.19`
`mysql 8.0`

# Описание проекта

Склонируйте проект в директорию с сервером:

`git clone https://github.com/Null-ch/SWC_laravel_test_task.git`

Создайте базу данных на сервере и проверьте поля файла .env:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=laravelBlog`

`DB_USERNAME=root`

`DB_PASSWORD=`

При необходимости сгенерируйте app key
`php artisan key:generate`

В той же консоли для запуска сайта введите команду:
`php artisan serve`

# Тестирование API

Тестирование проводилось в программе <a href="https://www.postman.com/"><b>Postman</b></a>

`Создание подборки`
![](https://github.com/Booooer/PSK/blob/main/public/img/t1.gif)

`Обновление подборки`

![](https://github.com/Booooer/PSK/blob/main/public/img/t2.gif)

`Удаление элемента подборки`

![](https://github.com/Booooer/PSK/blob/main/public/img/t3.gif)

`Создание элемента подборки`

![](https://github.com/Booooer/PSK/blob/main/public/img/t4.gif)

`Проверка неправильного api токена`

![](https://github.com/Booooer/PSK/blob/main/public/img/t5.gif)
