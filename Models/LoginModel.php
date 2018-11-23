<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/18/17
 * Time: 7:35 PM
 */
class LoginModel
{
    public function register($name, $lastName, $email, $password, $hash){
        global $gdb;
        $q = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `hash`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $gdb->prepare($q);

        if (!$stmt){
            echo ('Statement error: ' . $gdb->error);
            return false;
        }
        $password = md5($password);
        $ok = $stmt->bind_param('sssss', $name, $lastName, $email, $password, $hash);
        if (!$ok){
            echo ('bind_param error: ' . $gdb->error);
            return false;
        }

        $ok = $stmt->execute();
        if (!$ok){
            echo ('execute error: ' . $gdb->error);
            return false;
        }
        
        return true;
    }

    public function login($email, $password){
        global $gdb;
        $q = "SELECT `id`, `active` FROM `users` WHERE `email`=? and `password`=?";
        $stmt = $gdb->prepare($q);
        if (!$stmt){
            echo ('Statement error: ' . $gdb->error);
            return  false;
        }
        $password = md5($password);
        $ok = $stmt->bind_param('ss', $email, $password);
        if (!$ok){
            echo ('bind_param error: ' . $gdb->error);
            return false;
        }

        if (!$stmt->execute()){
            echo ('Statement error: ' . $gdb->error);
            return false;
        }

        $stmt->bind_result($id, $active);
        if (!$stmt->fetch()) {
            return false;
        }
        return array($id, $active);
    }

    public function resetpws($email){
        global $gdb;
        $q = "SELECT `id` FROM `users` WHERE `email`=?";
        $stmt = $gdb->prepare($q);
        if (!$stmt){
            echo ('1Statement error: ' . $gdb->error);
            return  false;
        }

        $ok = $stmt->bind_param('s', $email);
        if (!$ok){
            echo ('1bind_param error: ' . $gdb->error);
            return false;
        }

        if (!$stmt->execute()){
            echo ('2Statement error: ' . $gdb->error);
            return false;
        }

        $stmt->bind_result($id);
        if (!$stmt->fetch()) {
            return false;
        }
        $stmt->close();
        $hash = md5($id.$email.time());
        $q = 'UPDATE `users` SET `hash` = ? WHERE `id` = ?';
        $stmt = $gdb->prepare($q);
        if (!$stmt){
            echo ('3Statement error: ' . $gdb->error);
            return false;
        }
        
        $ok = $stmt->bind_param('si', $hash, $id);
        if (!$ok){
            echo ('3bind_param error: ' . $stmt->error);
            return false;
        }

        if (!$stmt->execute()){
            echo ('4Statement error: ' . $gdb->error);
            return false;
        }
        return $hash;
    }
}
