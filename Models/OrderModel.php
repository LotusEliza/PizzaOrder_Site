<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/4/17
 * Time: 8:35 PM
 */
class OrderModel
{
    public function createOrder($phone, $addr, $totalSum, $comment, $payment){
        global $gdb;
        $q = "INSERT INTO `orders` (`Phone`, `Addr`, `TotalSum`, `Comment`, `PayType`, `Date`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $gdb->prepare($q);
        if (!$stmt){
            echo ('Statement error: ' . $gdb->error);
            return false;
        }
        $date = date('Y-m-d H:i:s');
        $ok = $stmt->bind_param('ssisss', $phone, $addr, $totalSum, $comment, $payment, $date);
        if (!$ok){
            echo ('bind_param error: ' . $gdb->error);
            return false;
        }
        $ok = $stmt->execute();
        if (!$ok){
            echo ('execute error: ' . $gdb->error);
            return false;
        }
        $orderId = $stmt->insert_id;


        

        foreach ($_SESSION['cart'] as $key => $item) {

            $q = "INSERT INTO `order_items` (`Order`, `Pizza`, `Amount`) VALUES (?, ?, ?)";
            $stmt = $gdb->prepare($q);
            if (!$stmt) {
                echo('Statement error: ' . $gdb->error);
                return false;
            }
            $ok = $stmt->bind_param('iii', $orderId, $item['id'], $item['amount']);
            if (!$ok) {
                echo('bind_param error: ' . $gdb->error);
                return false;
            }
            $ok = $stmt->execute();
            if (!$ok) {
                echo('execute error: ' . $gdb->error);
                return false;
            }
        }
        return true;
    }

}
