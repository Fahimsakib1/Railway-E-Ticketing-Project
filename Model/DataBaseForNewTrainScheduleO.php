<?php 
$id = filter_input(INPUT_POST,'id');
$name = filter_input(INPUT_POST,'name');
$startingstation = filter_input(INPUT_POST,'startingstation');
$departuretime = filter_input(INPUT_POST,'departuretime');
$arrivalstation = filter_input(INPUT_POST,'arrivalstation');
$arrivaltime = filter_input(INPUT_POST,'arrivaltime');
$offday = filter_input(INPUT_POST,'offday');



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
							


					    $sql = "INSERT INTO trainschedule (id,trainname,startingstation,departuretime,arrivalstation,arrivaltime,offday) values ('$id','$name','$startingstation','$departuretime','$arrivalstation', '$arrivaltime','$offday')";

                         if ($conn->query($sql))

                        {

                        	echo " Ticket Schedule Added Successfully";
                        	echo "<br>";
                        	echo " <h2> Train Schedule </h2";

                        	

						    
						    $sql = "SELECT id,trainname,startingstation,departuretime,arrivalstation,arrivaltime,offday FROM trainschedule"; // Query
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
                             echo " Train ID = " . $row['id'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo " Starting Station = " . $row['startingstation'];
                             echo "<br>";
                             echo "  Departure Time= " . $row['departuretime'];
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

	echo "Train Information Must Be Filled";
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




	

	

