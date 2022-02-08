<?php 
$trainID = filter_input(INPUT_POST,'trainID');
$trainName = filter_input(INPUT_POST,'trainName');


if(!empty($trainID))

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


					$sql = "SELECT trainid AND trainname FROM passengerlistbytrain WHERE trainid='".$trainID."' and  trainname='".$trainName."' "; 

                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	echo "<br>";
                        	

						    
						    $sql = "SELECT trainid,trainname,passengername,address,mobile,age,startingstation,arrivalstation FROM passengerlistbytrain WHERE trainid='".$trainID."' and  trainname='".$trainName."' "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Train ID & Train Name Are Verified </h2";
							echo "<br>";
							echo "<h2> Passenger Details:</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										

                             echo "<br>";
                             echo " Train ID = " . $row['trainid'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo " Passenger Name = " . $row['passengername'];
                             echo "<br>";
                             echo " Address = " . $row['address'];
                             echo "<br>";
                             echo " Mobile = " . $row['mobile'];
                             echo "<br>";
                             echo " Age = " . $row['age'];
                             echo "<br>";
                             echo " Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo " Arrival Station = " . $row['arrivalstation'];
                             echo "<br>";
                             
                             
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Train ID & Name Inserted...</h1>";

									echo "<h2> Train Is Not Verified </h2";


									
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




	

	

