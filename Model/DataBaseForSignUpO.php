<?php 
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'pwdN');
$confirmpassword = filter_input(INPUT_POST,'pwdR');
$dob = filter_input(INPUT_POST,'dob');

if(!empty($name))

{

	    if (!empty($email))

	    {
             
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
							//echo "<h3> Data Base Connection Successful </h3>";
						
						
						if($password==$confirmpassword)
						{


						


					    $sql = "INSERT INTO signupdata (name,email,username,password,dob) values ('$name','$email','$username','$password','$dob')";

                         if ($conn->query($sql))

                        {

                        	echo " New Record Added Successfully";

						     $sql = "SELECT name,email,username,password,dob FROM signupdata WHERE password ='".$confirmpassword."'"; // Query
							$result = $conn -> query($sql); // result set

							 if($result->num_rows > 0) 

							{
									// show result
							echo "<h1> Sign Up Details: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										
                             echo "<br>";
                             echo " Name = " . $row['name'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";
                             echo "  User Name= " . $row['username'];
                             echo "<br>";
                             echo "  Password = " . $row['password'];
                             echo "<br>";
                             echo "  Date-Of-Birth = " . $row['dob'];
                             echo "<br>";

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<p>Result is zero</p>";
								} 

							
                        } 

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

                           }

                    }

               

                    else
                    {
                    	echo "<h2> Password Is Not Matching </h2>";
                    	echo "<h2> Try Again... </h2>";
                    }



                           $conn->close();

                    }
                        


	    }



           else
           {

           	echo " Name must be filled";
           	die();
           }



}


else

{

	echo " Please Fill The Necessary Details";
	die();
}



 ?>



 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


  <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/LoginO.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 




	

	

