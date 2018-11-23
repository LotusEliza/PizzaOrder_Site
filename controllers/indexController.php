<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/2/17
 * Time: 4:14 PM
 */
class indexController
{
    public function action($params){
        $model = new PizzaModel();
        $pizza = $model -> getPizzas();
        include 'templates/showPizza.php';
    }
}