<?php

			$pwd= $pwdN= $pwdR= "";
			$pwdErr= $pwdNErr= $pwdRErr= ""; 

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
			  	
			  	if (empty($_POST["pwd"])) 
			  	{
			  		$pwdErr = "Current password is required";
			  	}
			  	else
			  	{
			  		$pwd = test_input($_POST["pwd"]);
			  	}



			  	if (empty($_POST["pwdN"])) 
			  	{
			  		$pwdNErr = "Password is required";
			  	}
			  	else
			  	{
			  		$pwdN = test_input($_POST["pwdN"]);

			  		if (strlen($pwdN)<8) 
			  		{
	      				$pwdNErr = "Must not be less than eight (8) characters";
	      				$pwdN = "";
	    			}

	    			elseif(strpos($_POST["pwdN"], "$") == false && strpos($_POST["pwdN"], "@") == false && strpos($_POST["pwdN"], "%") == false &&strpos($_POST["pwdN"], "#") == false)
	    			{
	    				$pwdNErr = "Must contain at least one of the special characters (@, #, $, %)";
	    				$pwdN = "";
			  		}

			  		elseif ($pwd == $pwdN)
	    			{
	    				$pwdNErr = "New Password should not be same as the Current Password ";
	    				$pwdN = "";
			  		}
			  		
			  	}



			  	if (empty($_POST["pwdR"])) 

			  	{
			  		$pwdRErr = "Please retype New Password";
			  		$pwdN = "";
			  	}

			  	else
			  	{
			  		$pwdR = test_input($_POST["pwdR"]);	
			  		if ($pwdN != $pwdR) 
			  		{
	      				$pwdRErr = "Retyped Password must match with the New Password";
	      				$pwdR = "";
	      				$pwdN = "";
	    			}
			  	}


		  	}



			function test_input($data) 
			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}



			if ( !empty($_POST["pwd"]) && !empty($_POST["pwdN"]) && !empty($_POST["pwdR"]) )

           {
                        if ( $pwdN = $pwdR)

                        {
                            header('Location: AfterChangePasswordO.php');
                             exit;

                        }

                        
                      
           }


           

		?>