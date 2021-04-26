<?php

require 'settings.php';

/**
 * Функция для получения настроек проекта которые хранятся в файле 'settings.php'.
 * @global resource $settings
 */
function config(string $param, $default=null): string
{
    global $settings;
    $paramsArr = explode('.', $param);
    $lastObject = &$settings;
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
