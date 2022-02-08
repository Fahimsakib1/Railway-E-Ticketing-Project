<?php 
$Tid = filter_input(INPUT_POST,'Tid');
$Tname = filter_input(INPUT_POST,'Tname');
$StartingStation = filter_input(INPUT_POST,'StartingStation');
$ArrivalStation = filter_input(INPUT_POST,'ArrivalStation');


if(!empty($Tid))

{

	    if (!empty($Tname))

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
							


					    $sql = "INSERT INTO addtrain (id,trainname,startingstation,arrivalstation) values ('$Tid','$Tname','$StartingStation','$ArrivalStation')";

                         if ($conn->query($sql))

                        {

                        	echo " Train Added Successfully";
                        	
                        	echo " <h2> Train Lists Are Given Below </h2";

						    
						    $sql = "SELECT id,trainname,startingstation,arrivalstation FROM addtrain"; // Query
							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
							echo "<br>";	// show result
							echo "<h2>Database Results </h2>";


							//echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */

                             echo "<br>";
                             echo " Train ID = " . $row['id'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo "  Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo "  Arrival Station = " . $row['arrivalstation'];
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

           	echo " Train ID must be filled";
           	die();
           }



}


else

{

	echo " Train Name Must be filled";
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




	

	

