<?php
require_once 'Request.php';

class Router{
    
    public static function init(){
        $info = Request::normalizedPageRequest();
        if($info['controller']){
            self::openController($info['controller'], $info['action'], $info['args']);
        } else {
            self::defaultController();
        }
    }

    public static function openController($Controller = '', $action = 'index', $args = array()){
        $controllerPath = normalizePath(BASE_PATH.'/app/Controller/'.$Controller.'.php');
        $action = $action? $action : 'index';
        if(file_exists($controllerPath)){
            require $controllerPath;
            $controller = new $Controller();
            $controller->$action($args);
        }else{
            self::page404();
        }
    }

    public static function defaultController(){
        require normalizePath(BASE_PATH.'/app/Controller/PagesController.php');
        $controller = new PagesController();
        $controller->index();
    }

    public static function page404(){
        echo '404';
    }

}