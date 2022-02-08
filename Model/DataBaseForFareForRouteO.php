<?php 
$startingstation = filter_input(INPUT_POST,'startingstation');
$arrivalstation = filter_input(INPUT_POST,'arrivalstation');


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
							


					    //$sql = "INSERT INTO buyticket (name,trainname,destination,mobile) values ('$name','$trainname','$destination','$mobile')";


					$sql = "SELECT startingstation AND arrivalstation FROM fareforroute WHERE startingstation='".$startingstation."'AND arrivalstation = '".$arrivalstation."'"; 





                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	echo "<br>";
                        	

						    
						    $sql = "SELECT startingstation,arrivalstation,shovonchair,acchair,acberth,nonacberth FROM fareforroute WHERE startingstation='".$startingstation."' AND arrivalstation = '".$arrivalstation."' "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Route Is Verified </h2";
							echo "<br>";
							echo "<h2> Route Fare Details:</h2>";


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
									echo "<h1> Wrong Route Inserted...</h1>";

									echo "<h2> This Route Is Not Verified </h2";


									
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




	

	

