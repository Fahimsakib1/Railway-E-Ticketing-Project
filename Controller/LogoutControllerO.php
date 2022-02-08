<?php

session_start();


   if ($_SERVER["REQUEST_METHOD"] == "POST") 

   {
        if (isset($_POST['Logout'])) 

        {
            session_destroy();
            //setcookie($cookie_name,$cookie_value,t()-60*60*10);

            header('Location:../View/LoginO.php',true,303);
            exit;

        }

 
    }                 
?>