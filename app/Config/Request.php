<?php
class Request{
    public static function is($methodName){
        return $_SERVER['REQUEST_METHOD'] == strtoupper($methodName);
    }

    public static function get($name = '', $filter = FILTER_SANITIZE_SPECIAL_CHARS){
        return filter_input(INPUT_GET, $name, $filter);
    }

    public static function normalizedPageRequest(){
        $args = self::get('p', FILTER_SANITIZE_URL);
        return array(
            'controller' => $args[0],
            'action' => $args[1],
            'args' => array_slice($args,2)
        );
    }

    public static function post($name = '', $filter = FILTER_SANITIZE_SPECIAL_CHARS){
        return filter_input(INPUT_POST, $name, $filter);
    }

    public static function getOrPost($name = '', $filter = FILTER_SANITIZE_SPECIAL_CHARS){
        return filter_input(INPUT_REQUEST, $name, $filter);
    }
}