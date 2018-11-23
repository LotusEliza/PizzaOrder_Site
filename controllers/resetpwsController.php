<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 8/1/17
 * Time: 7:22 PM
 */
class resetpwsController
{
public function action($params){
    if (isset($_POST['email-submit'])){
        $email = $_POST['email'];

        $model = new LoginModel();
        $hash = $model -> resetpws($email);
        if($hash === false){
            include "templates/resetpwsResult.php";
        }
        else{
            if(!mail($email, 'password reset', 'Hello! This is your link: http://lotus-pizza.com/resetpws/'.$hash)){
                
            }
            include "templates/resetpwsResult.php";
        }
    }
    else{
        include "templates/resetpws.php";
    }



}
}