<?php 
$Tid = filter_input(INPUT_POST,'Tid');
$Tname = filter_input(INPUT_POST,'Tname');
$StartingStation = filter_input(INPUT_POST,'StartingStation');
$ArrivalStation = filter_input(INPUT_POST,'ArrivalStation');



                   
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
							


					    /*$sql = "INSERT INTO addtrain (id,trainname,startingstation,arrivalstation) values ('$Tid','$Tname','$StartingStation','$ArrivalStation')"; */


					    if($Tid<=10)

					    {
                          	  $sql = "DELETE FROM addtrain WHERE id='".$Tid."'";

                         if ($conn->query($sql))

                {

                        	//echo " Train Removed Successfully";
                        	//echo "<br>";
                        	//echo " Train Lists Are Given Below";

						    
						    $sql = "SELECT id,trainname,startingstation,arrivalstation FROM addtrain"; // Query
							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

					{
									// show result
							echo " <h2> Train Removed Successfully </h2>";
							//echo "<br>";
							echo "<h2>Results After Train Removed</h2>";

							echo "<ol>";
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

					    }

				

							else 
								{
									echo "<h1> Wrong Train ID Inserted...</h1>";

									echo "<h2> Train ID Is Not Verified </h2";
								}
							
                } 

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo "<h1> Wrong Train ID Inserted...</h1>";
                        	echo "<h2> Train ID Is Not Verified </h2";

                           }


                           $conn->close();

    }
                        

 ?>


 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/FahimSakib.html'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp



</table>

<div> 

