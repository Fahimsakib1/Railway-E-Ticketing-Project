<!DOCTYPE HTML>
<html>
	<head>


			<style>

		  body
		{
			
            	
			background-color: #C5C4C1;
			
			
			 
			
		}

		</style>
		
		<title>Dashboard</title>

		<link rel="stylesheet" href="../asset/css/style.css">
		
	</head>


	<body>
		<div style="max-width: fit-content; margin-left: auto; margin-right:auto">
			<table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">



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
						<table style="width: fit-content;">
							
							<tr>
								<td colspan="3">
									
									 <font color = "green" : align = left> <h2>PROFILE DETAILS</h2> </font>
								</td>
							</tr>


							<tr>
								<td width="30%">
									<p align="margin-left">
										Name : <br>
										<br>
										ID: <br>
										<br>
										E-mail : <br>
										<br>
										Mobile : <br>
										<br>
										Date of Birth : <br>
										<br>
										Address : <br>
										<br>
									</p>
								</td>


								<td width="300px">
									<p align="margin-left">

										Fahim Faysal <br>
										<br>
										35163 <br>
										<br>
										fahim.sakib.10@gmail.com <br>
										<br>
										01870203220 <br>
										<br>
										20/10/1998 <br>
										<br>
										Dinajpur, Bangladesh <br>
										<br>
									</p>
								</td>


								<td align="center" width="30%">
									<img style="border: 3px solid #555 " width="200"height="200" src="\project\Web-Tech-Final-Project\False Railway\asset\image\Pro Pic 2.jpg" alt="Profile Picture">
									
									<!-- <a href="ChangePicture.php">Change Picture </a> -->
								</td>
							</tr>

							
								<td align="margin-left" colspan="3">
									<a href="EditProfileO.php"> Edit Profile</a>
									<br><br>
								</td>


							
						</table>
					</td>
				</tr>
				<tr>

					<?php
                            //echo "I Am Fahim";

                         	//session_start();

							//echo "ghkf";
							//if(isset($_COOKIE["message"]))
							//{​​​​
							 //echo $_COOKIE["message"];
							//print_r($_COOKIE["message"]);

							//echo "ghkf";
							//}
					?>


					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'NewFooterO.php';?>
					</td>

				</tr>
			</table>
		<div>
	</body>
</html>



