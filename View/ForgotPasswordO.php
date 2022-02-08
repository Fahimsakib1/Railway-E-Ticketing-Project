<!DOCTYPE HTML>
<html>
	<head>

		<script src="../asset/javaScript/ForgotPasswordValidationO.js"></script>

		<title>Forgot Password</title>
		<style>
			.error {color: #FF0000;}

			body
            {

   	        background-color:#C5C4C1;

            }

			input

           {

            width: 85%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
		
	</head>
	<body>  

		
             <?php
          


    

          require('../Controller/ForgotPasswordControllerO.php');




		?>







		<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
			<table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1O.php';?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2>FORGOT PASSWORD</h2>

							<form method="post" action="../Model/DataBaseForForgotPasswordO.php" onsubmit="return validateForm()" > 


								E-mail:<br>
								 <input type="text" placeholder="Enter Email" id = "email" name="email">
								<span class="error" id = "errorMsgemail"><br>
									<?php echo $emailErr;?></span>
								<br>

								New Password: <br>
								<input type="Password" placeholder="Enter New Password" id = "pwdN" name="pwdN">
								<span class="error" id = "errorMsgepwdN"><br>
									<?php echo $pwdNErr;?></span>
								<br>


								Confirm New Password: <br>
								 </font><input type="Password" placeholder="Confirm New Password" id = "pwdR" name="pwdR">
								<span class="error" id = "errorMsgepwdR" ><br>
									<?php echo $pwdRErr;?></span>
								


								<input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">

							</form>

							<br><br>




							<?php

								/*echo "<h2>Inputs:</h2>";
								echo "<b>E-mail:</b> ".$email;
								echo "<br>";
								echo "<b>Password:</b> ".$pwdN;
								echo "<br>";
								echo "<b>Confirm Password:</b> ".$pwdR;
								echo "<br>";
								*/
								
							?>

						</div>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'NewFooterO.php';?>
					</td>
			</table>


		<div>
	</body>
</html>