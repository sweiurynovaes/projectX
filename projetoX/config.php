<?php

require 'environment.php';

if(ENVIRONMENT == "development") {
    $config['host'] = "localhost";
    $config['dbname'] = "cadastro";
    $config['dbuser'] = "root";
    $config['dbpass'] = "bdcomphp";
} else {
    $config['host'] = "localhost";
    $config['dbname'] = "cadastro";
    $config['dbuser'] = "root";
    $config['dbpass'] = "bdcomphp";
}
