
<?php 

	    
             
                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "project";
					$month = "August";

					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else 

					{
							//echo "<h3> Data Base Connection Successful </h3>";
							


					    //$sql = "INSERT INTO buyticket (name,trainname,destination,mobile) values ('$name','$trainname','$destination','$mobile')";


					    //$sql = "SELECT employeeid,employeename,salarymonth,salary,bonus,total FROM salary2020april"; 
                        

                        $sql = "SELECT salarymonth,salary,bonus,total FROM personalsalaryhistory WHERE salarymonth='".$month."' ";


                         if ($conn->query($sql))

                        {

                        	//echo " <h2> Your Ticket Is Verified </h2";
                        	
                        	

						    
						    //$sql = "SELECT employeeid,employeename,salarymonth,salary,bonus,total FROM salary2020april";  // Query


						$sql = "SELECT salarymonth,salary,bonus,total FROM personalsalaryhistory WHERE salarymonth='".$month."' ";


							$result = $conn -> query($sql); // result set

							if($result->num_rows > 0) 

							
						       {
								 // show result
							     //echo "<br>";
							     //echo " <h2> Employee ID Is Verified </h2";
							     //echo "<br>";
							     echo "<h2> Salary Details:</h2>";
							     echo "<ol>";


							   while($row = $result -> fetch_assoc()) 

							       {
										/* echo " <li> id = " . $row['id'] . " and " . "fullName = " . $row['fullName'] . "</li>"; */
                             
		                             //echo "<br>";
		                             //echo " Employee  ID = " . $row['employeeid']; 
		                             //echo "<br>";
		                             //echo " Employee Name = " . $row['employeename'];
		                             //echo "<br>";
		                             echo " Month of Salary = " . $row['salarymonth'];
		                             echo "<br>";
		                             echo " Salary = " . $row['salary']; echo " Taka";
		                             echo "<br>";
		                             echo " Bonus = " . $row['bonus']; echo " Taka";
		                             echo "<br>";
		                             echo " Total Salary = " . $row['total']; echo " Taka";
		                             echo "<br>";
                             

							        }


										echo "</ol>";
										echo "<br>";

						    }

							    else 

								{									

									echo "<h2> Month Is Not Verified </h2";
									
								}
							
                        } 

                            
                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

                           }

                         $conn->close();

                    }
     

 ?>

 

 <br><br>


   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
   <table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/NewSalaryHistoryO.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 



