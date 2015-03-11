<?php

function normalizePath($path){
    return str_replace(DIRECTORY_SEPARATOR, '/', $path);
}

if(!defined('BASE_PATH')){
    define('BASE_PATH',__DIR__);
}

require_once normalizePath('app/Config/config.php');
require normalizePath('public/bootstrap.php');