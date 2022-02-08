<?php 
$name = filter_input(INPUT_POST,'name');
$address = filter_input(INPUT_POST,'address');
$phone = filter_input(INPUT_POST,'phone');
$journeydate = filter_input(INPUT_POST,'journeydate');


if(!empty($name))

{

	    if (!empty($address))

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
							


					    $sql = "INSERT INTO passengerinfo (name,address,phone,journeydate) values ('$name','$address','$phone','$journeydate')";

                         if ($conn->query($sql))

                        {

                        	echo " Passenger Added Successfully";
                        	echo "<br>";
                        	echo " <h2> Passenger Lists Are Given Below </h2";

						    
						    $sql = "SELECT name,address,phone,journeydate FROM passengerinfo"; // Query
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
                             echo " Passenger Name = " . $row['name'];
                             echo "<br>";
                             echo " Address = " . $row['address'];
                             echo "<br>";
                             echo " Phone = " . $row['phone'];
                             echo "<br>";
                             echo " Journey Date = " . $row['journeydate'];
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

           	echo " Name must be filled";
           	die();

           }



}


else

{

	echo "Passenger Information Must Be Filled";
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




	

	

