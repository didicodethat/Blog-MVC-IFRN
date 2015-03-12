<?php

class AppDAO{
    
    public $cnn;

    public function __construct(){
        try {
            return new PDO(
                'mysql:host=' . $config['database']['address']
                    .';dbname=' . $config['database']['name'],
                $config['database']['username'],
                $config['database']['password'],
                array( PDO::ATTR_PERSISTENT  => true )
            );
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 1);
        }
    }
}