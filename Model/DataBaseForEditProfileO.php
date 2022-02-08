<?php 
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$gender = filter_input(INPUT_POST,'gender');
$dob = filter_input(INPUT_POST,'dob');
$address = filter_input(INPUT_POST,'address');

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
							


					    $sql = "INSERT INTO editprofileinfo (name,email,gender,dob,address) values ('$name','$email','$gender','$dob','$address')";

                         if ($conn->query($sql))

                        {

                        	echo " New Record Added Successfully";

						     $sql = "SELECT name,email,gender,dob,address FROM editprofileinfo"; // Query
							$result = $conn -> query($sql); // result set

							 if($result->num_rows > 0) 

							{
									// show result
							echo "<h1> Edited Profile Information: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										
                             echo "<br>";
                             echo " Name = " . $row['name'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";
                             echo " Gender = " . $row['gender'];
                             echo "<br>";
                             echo "  Date Of Birth= " . $row['dob'];
                             echo "<br>";
                             echo "  Address = " . $row['address'];
                             echo "<br>";
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<p> Result is zero</p>";
								} 

							
                        } 

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

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
    
	 echo "<h2> Please Fill The Necessary Details </h2";


	die();
}



 ?>




 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/FahimSakib.html'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 




	

	

