<?php 

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
							//echo "<br>";

					}

						    $sql = "SELECT id,trainname,startingstation,arrivalstation FROM addtrain "; // Query

							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

						{
									// show result
							//echo "<br>";
							//echo " <h2> Train ID & Train Name Are Verified </h2";
							//echo "<br>";
							echo "<h2> Showing Trains</h2>";


							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							  {
										

                             echo "<br>";
                             echo " Train ID = " . $row['id'];
                             echo "<br>";
                             echo " Train Name = " . $row['trainname'];
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
							
                          $conn->close();


 ?>

<!DOCTYPE html>
<html>
<head>

<style>
	.mainDivFormButton1{
    margin-top: 7%;
    margin-bottom: 40%;
    margin-left: 2px; */
    font-size: 32px;
    font-weight: bold;
    background-color:  #ab8d1d ;
    height: 35px;
    border: none;
    color: black;
    border-radius: 10px;
    padding: 15px 25px; 
    text-decoration: none;
    width:170px;
    margin-left: 30px;
}

.mainDivFormButton1:hover
{
	background-color:#4ACC55  ;
}

</style>

	<title> </title>
</head>
<body>

</body>
</html>



 <br><br>

  <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
  <table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <!-- <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/FahimSakib.html'">Back</button>-->


<button class = "mainDivFormButton1" type="button" onClick="document.location.href='../View/FahimSakib.html'">Back</button>  
        


</table>

</div> 




	

	

