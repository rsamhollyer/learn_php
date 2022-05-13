<?php


App::bind('config',  require 'config/config.php');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


function view($name, $data = []) {
    extract($data);
    /* 
    ['name'=>'joe', 'age'=>20]

    ---extract---
    $name='joe'; 
    $age = 20;
    */
    return require "views/{$name}.view.php";
}


function redirect($path = "") {
    header("Location: /{$path}");
}
