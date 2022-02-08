
<?php 
$name = filter_input(INPUT_POST,'name');
$trainname = filter_input(INPUT_POST,'trainname');
$destination = filter_input(INPUT_POST,'destination');
$mobile = filter_input(INPUT_POST,'mobile');


if(!empty($mobile))

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


					$sql = "SELECT mobile FROM buyticket WHERE mobile='".$mobile."'"; 

                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	echo "<br>";
                        	

						    
						    $sql = "SELECT name,trainname,destination,mobile FROM buyticket WHERE mobile='".$mobile."' "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							{
									// show result
							//echo "<br>";
							echo " <h2> Your Ticket Is Verified </h2";
							echo "<br>";
							echo "<h2> Your Ticket Details:</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */

                             echo "<br>";
                             echo " User Name = " . $row['name'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
                             echo "<br>";
                             echo " Destination = " . $row['destination'];
                             echo "<br>";
                             echo " Mobile = " . $row['mobile'];
                             echo "<br>";
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<h1> Wrong Mobile Number...</h1>";

									echo "<h2> Your Ticket Is Not Verified </h2";


									
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

	echo " <h2> Enter Mobile Number Please </h2>";
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



