# Стажировка в Махаон
Функция для получения неких данных проекта. <br>
Исходные данные проекта были заданы следующие: 

# "settings.php" <br> ![26-04-2021 21-50-32](https://user-images.githubusercontent.com/62264016/116135147-6c4c8400-a6d9-11eb-802e-60cef9f0717a.png)


Сама функция находится в файле:
# "main.php"
Примеры вывода данных на экран с помощью данной функции:<br>
print config("site_url"); print "\n"; // http://mysite.ru<br>
print config("db.user"); print "\n"; // admin<br>
print config("db.host", "localhost"); print "\n";// localhost<br>
print config("app.services.resizer.fallback_format"); print "\n"; // jpeg<br>
print config("db.host", "localhost"); // exception
