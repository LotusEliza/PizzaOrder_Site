
<?php
class registerController
{
    public function action()
    {
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])
            && isset($_POST['password']) && isset($_POST['password2'])){

            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            if($password!==$password2){
                include "templates/registration.php";
                exit;
            }
            $hash='';

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];

            $model = new LoginModel();
            $model -> register($fname, $lname, $email, $password, $hash);

            include "templates/registration_confirmation.php";
        } else {
            include "templates/registration.php";
        }
    }
}

?>


