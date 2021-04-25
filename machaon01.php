<?php

$settings = [
  "site_name" => "My site",
  "site_url" => "http://mysite.ru",
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


function returnDefaultParam($default) {
    if (empty($default))
        throw new ErrorException( "Exception! Default param not defined!");
    return $default;
}

function config($param, $default=null)
{
    global $settings;
   
    $paramsArr = explode('.', $param);
    $lastObject = &$settings;
    
        foreach ($paramsArr as &$key) {
            
            if(!array_key_exists($key, $lastObject))
               return returnDefaultParam($default); 

            $lastObject = &$lastObject[$key];
        }
    
        return $lastObject;
    
}

//print config("site_url"); print "\n"; // http://mysite.ru
//print config("db.user"); print "\n"; // admin
//print config("db.host", "localhost"); print "\n";// localhost
//print config("app.services.resizer.fallback_format"); print "\n"; // jpeg
//print config("db.host", "localhost"); // exception

