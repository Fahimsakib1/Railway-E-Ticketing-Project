<?php 
$ticketID = filter_input(INPUT_POST,'ticketID');


if(!empty($ticketID))

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


					$sql = "SELECT ticketid FROM passengerlistbyticketid WHERE ticketid='".$ticketID."'"; 

                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	echo "<br>";
                        	

						    
						    $sql = "SELECT ticketid,trainname,passengername,journeydate,journeytime,startingstation,arrivalstation,arrivaltime,mobile FROM passengerlistbyticketid WHERE ticketid='".$ticketID."' "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Passenger Is Verified </h2";
							echo "<br>";
							echo "<h2> Passenger Details:</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										

                             echo "<br>";
                             echo " Ticket ID = " . $row['ticketid'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo " Passenger Name = " . $row['passengername'];
                             echo "<br>";
                             echo " Journey Date = " . $row['journeydate'];
                             echo "<br>";
                             echo " Journey Time = " . $row['journeytime'];
                             echo "<br>";
                             echo " Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo " Arrival Station = " . $row['arrivalstation'];
                             echo "<br>";
                             echo " Arrival Time = " . $row['arrivaltime'];
                             echo "<br>";
                             echo " Mobile = " . $row['mobile'];
                             echo "<br>";
                             
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Ticket ID Inserted...</h1>";

									echo "<h2> Your Ticket ID Is Not Verified </h2";


									
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

	echo " Ticket ID Must be filled";
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




	

	

