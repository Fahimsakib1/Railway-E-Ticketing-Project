<?php 
$id = filter_input(INPUT_POST,'id');
$name = filter_input(INPUT_POST,'name');
$previousdate = filter_input(INPUT_POST,'previousdate');
$newdate = filter_input(INPUT_POST,'newdate');
$previousdestination = filter_input(INPUT_POST,'previousdestination');
$newdestination = filter_input(INPUT_POST,'newdestination');



if(!empty($id))

{

	    if (!empty($name))

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
							


					    $sql = "INSERT INTO changeticketstatus (id,name,previousdate,newdate,previousdestination,newdestination) values ('$id','$name','$previousdate','$newdate','$previousdestination', '$newdestination')";

                         if ($conn->query($sql))

                        {

                        	echo " Ticket Changed Successfully";
                        	echo "<br>";
                        	echo " <h2> Changed Ticket Lists Are Given Below </h2";

                        	

						    
						    $sql = "SELECT id,name,previousdate,newdate,previousdestination,newdestination FROM changeticketstatus"; // Query
							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
						    
						    echo " <br> ";			// show result
							echo "<h2> Results </h2>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */

                             echo "<br>";
                             echo " Ticket ID = " . $row['id'];
                             echo "<br>";
                             echo " Passenger Name = " . $row['name'];
                             echo "<br>";
                             echo " Previous Journey Date = " . $row['previousdate'];
                             echo "<br>";
                             echo " New Journey Date = " . $row['newdate'];
                             echo "<br>";
                             echo " Previous Destination = " . $row['previousdestination'];
                             echo "<br>";
                             echo " New Destination = " . $row['newdestination'];
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





                           $conn->close();

                    }
                        


	    }



           else
           {

           	echo " Ticket ID must be filled";
           	die();

           }



}


else

{

	echo "Ticket Information Must Be Filled";
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




	

	

