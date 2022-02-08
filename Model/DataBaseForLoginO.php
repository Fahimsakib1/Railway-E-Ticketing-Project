<?php 
$name = filter_input(INPUT_POST,'name');
$pwd = filter_input(INPUT_POST,'pwd');



      function login($name,$pwd)
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


    $sql = "SELECT * FROM signupdata WHERE username='".$name."' and  password='".$pwd."' "; 

                         if ($conn->query($sql))

                        {

                          //echo " <h2> Your Ticket Is Verified </h2";
                          echo "<br>";
                          

                
                // Query

              $result = $conn -> query($sql); // result set

              if($result->num_rows > 0) 

              {
                
              
              return true;
              
             
                }

                else
                {



                    $conn->close();

                    }
      }
                        
      

}


}


 ?>



 

 




  

  

