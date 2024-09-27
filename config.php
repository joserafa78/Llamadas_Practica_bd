<?php
//Video de Proyes de github.
// https://www.youtube.com/watch?v=7eeHBaPnUGM&ab_channel=DaniCode
//define ( 'DS' , DIRECTORIO_SEPARADOR );
//define ( 'ROOT' , realpath ( dirname (__FILE__)). DS );
define("URL", "http://localhost/GoldNails/");

session_start(); // Inicia un Sesion.

// _____________ CONEXIÓN A BD___________________
define('__CONFIG__', [
    'db' => [
        'host' => '127.0.0.1:33065',
        'database' => 'llamadas',
        'user' => 'root',
        'password' => ''
    ]
]);
