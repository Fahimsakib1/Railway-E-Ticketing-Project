<!DOCTYPE HTML>
<html>
	<head>

		<script src="../asset/javaScript/ChangePasswordValidationO.js"></script>

		<style>
			.error {color: #FF0000;}

			
				

		  body
		{
			
            	
			background-color:#C5C4C1;
			
			
			 
			
		}

		

			input

           {

            width: 38%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
			

	</head>
	<body>  

		<?php
                   
            require('../Controller/ChangePasswordControllerO.php');

		?>


		<div style="max-width: 1000px; margin-left: auto; margin-right:auto">
			<table style="width: 1000px; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header2O.php';?>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
						<?php include 'NavigationbarO.php';?>
					</td>
					<td>
						<div style="max-width:790px; margin-left: auto; margin-right:auto">
							<h2> CHANGE PASSWORD</h2>
							<form method="post" action="../Model/DataBaseForChangePasswordO.php" onsubmit="return validateForm()"> 

								Current Password: <br> <input type="Password" placeholder="Enter Current Password" id ="pwd" name="pwd"> 
								<span class="error" id = "errorMsgpwd"><?php echo $pwdErr;?></span>
								<br>

								<font color="green">New Password: <br> </font><input type="Password" placeholder="Enter New Password" id ="pwdN" name="pwdN"> 
								<span class="error" id = "errorMsgpwdN"><?php echo $pwdNErr;?></span>
								<br>

								Retype New Password: <br> <input type="Password" placeholder="Retype New Password" id ="pwdR" name="pwdR"> 
								<span class="error" id = "errorMsgpwdR"><?php echo $pwdRErr;?></span>
								<br>

								<input class = "mainDivFormButton"  type="submit" name="submit" value="Submit">  
							</form>
							
						</div>
					</td>
				</tr>

               <tr>
                     
					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">

						<?php include 'NewFooterO.php';?>
					</td>

				</tr>

			</table>
		<div>
	</body>
</html>
