<?php

session_start();

define("BASE_URL", "localhost/projectX/projetoX");
require 'vendor/autoload.php';
require 'config.php';

spl_autoload_register(function($class){
        if(strpos('Controller', $class) > -1) {
            if(file_exists('controllers/'.$class.'.php')) {
                require 'controllers/'.$class.'.php';
            }
        } elseif(file_exists('models/'.$class.'.php')) {
            require 'models/'.$class.'.php';
        } else {
            require 'core/core.php';
        }
});

$log = new Monolog\Logger("log");
$log->pushHandler(new Monolog\Handler\StreamHandler('erros.log', Monolog\Logger::WARNING));
//$log->addError("Aviso! Algo deu errado!!");

$core = new Core();
$core->run();

