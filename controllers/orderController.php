<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/4/17
 * Time: 8:09 PM
 */
class orderController
{
    public function action($params)
    {
        if (!isset($_SESSION['cart'])){
            header('Location:/');
            exit;
        }
        if (count($_POST) > 0) {

            // Required field names
//            $required = array('phone', 'addr', 'payment');
//
//            // Loop over field names, make sure each one exists and is not empty
//            $error = false;
//            foreach($required as $field) {
//                if (empty($_POST[$field])) {
//                    $error = true;
//                }
//            }
//
//            if ($error) {
//                echo "All fields are required.";
//            } else {
//                echo "Proceed...";
//
//            }
            $phone = $_POST['phone'];
            $addr = $_POST['addr'];
            $payment = $_POST['payment'];
            $comment = $_POST['comment'];

//______________________________________________________________________

            //__________________________________________________________
            //Counting totalSum_________________
            $totalSum = 0;
            if (isset($_SESSION['cart'])){
                $cm = new PizzaModel();
                foreach( $_SESSION['cart'] as $key => $value) {
                    $cart = $cm->onePizza($value['id']);
                    $totalSum+=$cart[4]*$value['amount'];
                }
            }

            require_once 'Models/OrderModel.php';
            $model = new OrderModel();
            $result = $model->createOrder($phone, $addr, $totalSum, $comment, $payment);
            if(!$result){
                echo "\nerror: \n ";
                return;
            }
            unset($_SESSION['cart']);
            include 'templates/orderAccept.php';

        } else {


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

            include 'templates/orderForm.php';
        }
    }

//        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
//            if (empty($_POST["phone"])) {
//                $phoneErr = "Phone is required";
//            } else {
//                $phone = test_input($_POST["phone"]);
//            }
//        }
    }
//    public function test_input($data) {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }

