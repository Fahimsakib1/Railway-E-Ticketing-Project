<?php 

$startingstation = filter_input(INPUT_POST,'startingstation');
$arrivalstation = filter_input(INPUT_POST,'arrivalstation');
$shovonchair = filter_input(INPUT_POST,'shovonchair');
$acchair = filter_input(INPUT_POST,'acchair');
$acberth = filter_input(INPUT_POST,'acberth');
$nonacberth = filter_input(INPUT_POST,'nonacberth');

if(!empty($startingstation))

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
							
                     /* MAIN */

					    /* $sql = "INSERT INTO updatefareforroute (startingstation,arrivalstation,shovonchair,acchair,acberth,nonacberth) values ('$startingstation','$arrivalstation','$shovonchair','$acchair','$acberth','$nonacberth')"; MAIN */


					//$sql = "SELECT startingstation AND arrivalstation FROM fareforroute WHERE startingstation='".$startingstation."'AND arrivalstation = '".$arrivalstation."'"; 

                       
                       $sql = "UPDATE fareforroute SET shovonchair='$shovonchair',acchair='$acchair', acberth='$acberth', nonacberth ='$nonacberth' WHERE startingstation='".$startingstation."'AND arrivalstation = '".$arrivalstation."'";




                         if ($conn->query($sql))

                        {

                        	//echo " <h2>Ticket Fare Is Updated</h2";
                        	//echo "<br>";
                        	

						     /* MAIN */
						    /* $sql = "SELECT startingstation,arrivalstation,shovonchair,acchair,acberth,nonacberth FROM updatefareforroute"; MAIN*/ // Query

						    $sql = "SELECT startingstation,arrivalstation,shovonchair,acchair,acberth,nonacberth FROM fareforroute WHERE startingstation='".$startingstation."'AND arrivalstation = '".$arrivalstation."'";

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Ticket Fare Is Updated</h2";
							echo "<br>";
							echo "<h2> Updated Ticket Fare Details:</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										

                             echo "<br>";
                             echo " Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo " Arrival Station = " . $row['arrivalstation'];
                             echo "<br>";
                             echo " Shovon Chair = " . $row['shovonchair'];
                             echo "<br>";
                             echo " AC Chair = " . $row['acchair'];
                             echo "<br>";
                             echo " AC Berth = " . $row['acberth'];
                             echo "<br>";
                             echo " Non AC Berth = " . $row['nonacberth'];
                             echo "<br>";
                             
                             
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Station Inserted...</h1>";

									echo "<h2> This Station Is Not Verified For Update Fare</h2";


									
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

	echo " <h2> Please Fill The Starting Station And Arrival Station </h2> ";
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




	

	

