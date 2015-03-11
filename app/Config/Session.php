<?php
class Session{
    public function Session(){
        session_start();
    }
    public function __get( $name ) {
        return filter_input(INPUT_SESSION, $name);
    }
    public function __set($name, $value){
        $_SESSION[$name] = $value;
    }
    public function __isset($name){
        return isset($_SESSION[$name]);
    }

    public function __unset($name){
        return unset($_SESSION[$name]);
    }

    public function destroy(){
        session_destroy();
    }
}