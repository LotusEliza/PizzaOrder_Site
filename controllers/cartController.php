<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/2/17
 * Time: 5:30 PM
 */
class cartController
{
    public function action($params)
    {
        if (count($_POST) > 0) {
            $id = $_POST['id'];
            $amount = $_POST['amount'];

            $valueAppended = false;
            if (isset($_SESSION['cart'])){
                foreach( $_SESSION['cart'] as $key => $value) {
                    if ($value['id'] != $id){
                        continue;
                    }
                    //$value['amount'] += $amount;
                    $_SESSION['cart'][$key]['amount'] += $amount;//replace key with new value
                    $valueAppended = true;
                    break;
                }
            }

            if(!$valueAppended) {
                //array_push($_SESSION['cart'], array($id, $amount)); analogichno
                $_SESSION['cart'][] = array('id' => $id, 'amount' => $amount);//appending array
            }
            header('Location: cart');
        }
        else
        {
            if (!isset($_SESSION['cart'])){
                header('Location:/');
                exit;
            }
            $cartPizzas=[];
            $totalSum = 0;
            if (isset($_SESSION['cart'])){
                foreach( $_SESSION['cart'] as $key => $value) {
                    //echo $id[0];
                    $cm = new PizzaModel();
                    $cart = $cm->onePizza($value['id']);
                    $pizza = [];
                    $pizza[] = $cart[1];         //name
                    $pizza[] = $value['amount'];
                    $pizza[] = $cart[4];         //price
                    $pizza[] = $cart[4]*$value['amount'];
                    $pizza[] = $value['id'];
                    //vd($pizza);
                    $cartPizzas[]=$pizza;
                    $totalSum+=$pizza[3];
                }
            }
            //vd($cartPizzas);
            include "templates/cart.php";
            //include "templates/orderForm.php";
        }
        //echo '<pre>'; print_r($_SESSION); echo '</pre>';
    }

}