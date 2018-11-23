
<?php
class loginController
{
    public function action()
    {
//include("database/db_conection.php");

        if (isset($_POST['login-submit'])) { //
            $email = $_POST['username'];
            $password = $_POST['password'];
//vd($_POST);
            //$check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";
            //$run=mysqli_query($dbcon,$check_user);

            $cm = new LoginModel();
            $login = $cm->login($email, $password);

            if ($login!==false)  //was $run (mysqli_num_rows($login)
            {
                //echo "<script>window.open('welcome.php','_self')</script>";
                
                if($login[1] == false){
                    include "templates/login_inactive.php";
                    exit;
                }
                
                $_SESSION['id'] = $login[0];
                header('location:/');
                exit;
                //$_SESSION['email'] = $email;//here session is used and value of $user_email store in $_SESSION.

            } else {
                include "templates/login_incorrect.php";
            }

        } else {
            include "templates/login.php";
        }
    }
}

?>


