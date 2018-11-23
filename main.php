<?php

session_start();

require_once 'config.php';
require_once 'db.php';
//require_once 'IController.php';
require_once 'Models/PizzaModel.php';
require_once 'Models/LoginModel.php';


function vd($v){
    var_dump($v);
    die;
}
