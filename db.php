<?php

global $_config;

$gdb = new mysqli($_config['DBHost'],$_config['DBUser'],$_config['DBPass'],$_config['DBName']);
if ($gdb->connect_error){
    die('Connection error: ' . $gdb->connect_error);
}