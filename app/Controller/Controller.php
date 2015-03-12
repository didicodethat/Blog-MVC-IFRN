<?php
require_once normalizePath(BASE_PATH.'/app/View/View.php');
class Controller{
    public function __construct(){
        $this->view = new View();
    }
}