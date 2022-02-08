<?php 
 
 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "project";

 $conn =mysqli_connect($servername,$dbusername,$dbpassword,$dbname );
 $resultset = mysqli_query($conn, "SELECT * from passengerlistbytrain");
 $json_array =array();

 while ($row = mysqli_fetch_assoc($resultset))
 {
 	$json_array[] =$row;
 }

 /* echo "<pre>";
 print_r($json_array);
 echo "</pre>";  */

 print(json_encode($json_array));
?>