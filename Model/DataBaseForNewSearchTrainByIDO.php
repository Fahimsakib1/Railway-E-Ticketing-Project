
<?php 
$tid = filter_input(INPUT_POST,'tid');



if(!empty($tid))

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


					$sql = "SELECT id FROM trainschedule WHERE id='".$tid."'"; 

                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	//echo "<br>";
                        	

						    
						    $sql = "SELECT id,trainname,startingstation,departuretime,arrivalstation,arrivaltime,offday FROM trainschedule WHERE id='".$tid."' "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Train ID Is Verified </h2";
							echo "<br>";
							echo "<h2> Searched Train Details:</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */

                             echo "<br>";
                             echo " Train ID = " . $row['id'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo " Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo " Departure Time = " . $row['departuretime'];
                             echo "<br>";
                             echo " Arrival Station = " . $row['arrivalstation'];
                             echo "<br>";
                             echo " Arrival Time = " . $row['arrivaltime'];
                             echo "<br>";
                             echo " Off Day = " . $row['offday'];
                             echo "<br>";
                             
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Train ID...</h1>";

									echo "<h2> Train ID Is Not Verified </h2";


									
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

	echo " <h2> Please  Enter Train ID To Search Train </h2>";
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



