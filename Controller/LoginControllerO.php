<?php

   require ('../Model/DataBaseForLoginO.php');

   //require('../Controller/LoginControllerO.php');

	$name = $pwd = "";
	$nameErr = $pwdErr = ""; 

	if ($_SERVER["REQUEST_METHOD"] == "POST") 

	{

		if (isset($_POST['submit2'])) 

        {
           

            header('Location:../View/RegistrationO.php',true,303);
            exit;

        }

        if (isset($_POST['submit3'])) 

        {
           

            header('Location:../View/indexO.html',true,303);
            exit;

        }


		
		//echo "Hello World";		
		$counter = 0;


		if (isset($_POST["name"]) & !empty($_POST["name"])) 

		{
   		    $name = $_POST["name"];
   		}

   		else 

   		{
   			$counter = $counter + 1;
   		}

   		if (isset($_POST["pwd"]) & !empty($_POST["pwd"])) 

   		{
   			$pwd = $_POST["pwd"];
   		}

   		else 

   		{
   		 	$counter = $counter + 1;
   		}

   		$userFound = false;

      	if (login($name, $pwd))
      	{
      		$userFound = true;
      	}

		if($userFound == false) 

		{
			$counter = $counter + 1;
		}


		if($userFound) 

		{
		 	echo "<p>Login Successful</p>";
		 	//echo "<a href='../View/Dashboard.php'>Home</a>";

		 	//$cookie_name ="user";
			//$cookie_value ="Welcome to the Fahim";
			//setcookie($cookie_name,$cookie_value,t()+60*60*10);



		 	session_start();
			$_SESSION['name']=$name;
            
            //$cookie_name ="user";
			$cookie_value ="Our Project Is: Railway Management & E-Ticketing System";
			setcookie("message", $cookie_value, time() + (86400 * 7), "/");

			
			header('Location: ../View/FahimSakib.html');
		}


		else 

		{
			
            header('Location: ../View/LoginFailedO.php');

			// header('Location: ../View/LoginFailed.php');

			
						      			
		}

	}



?>