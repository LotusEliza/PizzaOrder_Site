<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/2/17
 * Time: 3:18 PM
 */
class PizzaModel
{
    public function __construct()
    {

    }
    public function getPizzas()
    {
        global $gdb;
        $q = "SELECT * FROM `pizzas`";
        $stmt = $gdb->prepare($q);
        if (!$stmt){
            echo ('Statement error: ' . $gdb->error);
            return [];
        }
        if (!$stmt->execute()){
            echo ('Statement error: ' . $gdb->error);
            return [];
        }
        $stmt->bind_result($Id, $Name, $Description, $ImgLink, $Price, $Presence);
        $pizzas=[];
        while ($stmt->fetch()) {
            $pizzas[]=[$Id, $Name, $Description, $ImgLink, $Price, $Presence];
        }
        return $pizzas;
    }
    public function onePizza($id){
            global $gdb;
            $q = "SELECT * FROM `pizzas` WHERE `Id`={$id}";
            $stmt = $gdb->prepare($q);
            if (!$stmt){
                echo ('Statement error: ' . $gdb->error);
                return [];
            }
            if (!$stmt->execute()){
                echo ('Statement error: ' . $gdb->error);
                return [];
            }
            $stmt->bind_result($Id, $Name, $Description, $ImgLink, $Price, $Presence);
            $pizzasInCart=[];
            if ($stmt->fetch()) {
                $pizzasInCart = [$Id, $Name, $Description, $ImgLink, $Price, $Presence];
            }
        //vd($pizzasInCart);
        return $pizzasInCart;
        }
    

    }

 