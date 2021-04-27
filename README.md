# Стажировка в Махаон
Функция для получения неких данных проекта. <br>
Исходные данные проекта были заданы следующие: 
# "settings.php" <br>
```
<?php

// settings.php

$return = [
    "site_name" => "My site",
    "site_url" => "http://mysite.ru",
    "assets" => [
        "version" => 2,
        "minify" => true,
    ],
    "db" => [
        "user" => "admin",
        "password" => "ifghigh8y8rt347ghi",
        "name" => "my_database"
    ],
    "app" => [
        "services" => [
            "resizer" => [
                "prefer_format" => "webp",
                "fallback_format" => "jpeg"
            ]
        ]
    ]
];

```
Сама функция находится в файле:
# "main.php"
```
<?php

require 'settings.php';

/**
 * Функция для получения настроек проекта которые хранятся в файле 'settings.php'.
 * @global array $return
 */
function config(string $param, $default=null): string
{
    global $return;
    $paramsArr = explode('.', $param);
    $lastObject = &$return;
    foreach ($paramsArr as &$key) {
        if(!array_key_exists($key, $lastObject)) {
            if(is_null($default));
                throw new Exception( "Exception! Default param not defined!");
            return $default;
        }
        $lastObject = &$lastObject[$key];
    }
    return $lastObject;
}
```
Примеры вывода данных на экран с помощью данной функции:<br>
```
print config("site_url"); print "\n"; // http://mysite.ru<br>
print config("db.user"); print "\n"; // admin<br>
print config("db.host", "localhost"); print "\n";// localhost<br>
print config("app.services.resizer.fallback_format"); print "\n"; // jpeg<br>
print config("db.host", "localhost"); // exception
```
