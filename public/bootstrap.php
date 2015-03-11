<?php

if(!defined('PUBLIC_PATH')){
    define('PUBLIC_PATH', __DIR__);
}

require_once (normalizePath(BASE_PATH.'/app/Config/Router.php'));

Router::init();