<?php

class app
{

    private static $name = '@H4ck3erS_bot';
    private static $bot_token = '2128105874:AAHObulUy1360Ptrp9ep87oy4FTrp1BhWGc';

    public static function setName(string $name)
    {
        self::$name = $name;
    }

    public static function setToken(string $bot_token)
    {
        self::$bot_token = $bot_token;
    }

    public static function dump($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    public static function access()
    {
        return ( isset($_COOKIE['token']) && $_COOKIE['token'] == self::$bot_token ) ? true : false;
    }
    
}
