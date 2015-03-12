<?php
class View{
    public $layout = 'default.php';
    public $view = '';
    public function render(){
        include normalizePath('layouts/'.$this->layout);
    }
}