<?php 
$name = filter_input(INPUT_POST,'name');
$address = filter_input(INPUT_POST,'address');
$mobile = filter_input(INPUT_POST,'mobile');
$trainname = filter_input(INPUT_POST,'trainname');
$startingstation = filter_input(INPUT_POST,'startingstation');
$arrivalstation = filter_input(INPUT_POST,'arrivalstation');

if(!empty($name))

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
							


					    $sql = "INSERT INTO jsonexample (name,address,mobile,trainname,startingstation,arrivalstation) values ('$name','$address','$mobile','$trainname','$startingstation','$arrivalstation')";



                         if ($conn->query($sql))

                        {

                        	//echo " <h2>Ticket Fare Is Updated</h2";
                        	//echo "<br>";
						    
						    $sql = "SELECT * FROM jsonexample "; // Query

							$result = $conn -> query($sql); // result set

							$json_array = array();

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							
							echo "<h2> List are showing in JSON Format :</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										

                             /*echo "<br>";
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
                             echo "<br>"; */

                             $json_array[] =$row;
                             
                             
                             

							}

							/* echo "<pre>";
                            print_r($json_array);
                            echo "</pre>";*/ 

                            print(json_encode($json_array));


							
							//echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Input Inserted...</h1>";

									echo "<h2> This Input Is Not Verified </h2";


									
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

	echo " <h2> Please Fill Your Name And Address </h2> ";
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




	

	

