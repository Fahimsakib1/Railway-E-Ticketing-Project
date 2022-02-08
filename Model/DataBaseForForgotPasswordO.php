<?php 
$email = filter_input(INPUT_POST,'email');
$pwdN = filter_input(INPUT_POST,'pwdN');
$pwdR = filter_input(INPUT_POST,'pwdR');
$myname ="Fahim";

	    
                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "project";


					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else 

					{
						
						if($pwdN==$pwdR)

						{

							$sql = "UPDATE signupdata SET password='$pwdR' WHERE name='".$myname."'";


                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	echo "<br>";
                        	

						    
						$sql = "SELECT name,email,username,password,dob FROM signupdata WHERE name='".$myname."'";

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
							
							
							echo "<h2> New Password Added Successfully</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										

                             echo "<br>";
                             echo " Name = " . $row['name'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";
                             echo " User Name = " . $row['username'];
                             echo "<br>";
                             echo " New password= " . $row['password'];
                             echo "<br>";
                             echo " Date-Of-Birth = " . $row['dob'];
                             echo "<br>";

							}
							
							echo "<br>";

								}

						}

						else 
								{
									

									echo "<h2> Error Adding New Password</h2";


									
								}

						}

                           else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */
                            echo "<h2> New Password And Confirm New Password Are Not Matching</h2";
                            echo "<br>";
                        	echo "<h2> Error Adding New Password</h2";

                           }



                           $conn->close();

                    }
                        


 ?>



 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/LoginO.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp



</table>

<div> 




	

	

