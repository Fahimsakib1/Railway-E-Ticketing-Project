<?php



$startingstation = $arrivalstation ='';
$startingstationErr = $arrivalstationErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    

    if (empty($_POST["startingstation"])) 

    {
        $startingstationErr = "Starting Station is Empty";
    } 

    else 

    {
        $startingstation = test_input($_POST["startingstation"]);

        
    }



    if (empty($_POST["arrivalstation"])) 

    {
        $arrivalstationErr = "Arrival Station is Empty";
    } 

    else 

    {
        $arrivalstation = test_input($_POST["arrivalstation"]);

        
    }

}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["startingstation"]) &&  !empty($_POST["arrivalstation"]))

           {
                        if ( $startingstation == "Dhaka" && $arrivalstation == "Joydebpur" )

                        {
                           

                             /* echo " Snighdha --> 115 Taka"; 
                             echo "<br>";

                             echo " AC Seat --> 127 Taka";
                             echo "<br>";

                             echo " AC Berth --> 150 Taka";
                             echo "<br>";

                             */


                              header('Location: ../View/DhakaToJoydebpurFareO.php');



                        }

                        else if ($startingstation == "Dhaka" && $arrivalstation == "Narsingdi")

                             {
                            

                             /* echo " Snighdha --> 133 Taka";
                             echo "<br>";

                             echo " AC Seat --> 156 Taka";
                             echo "<br>";

                             echo " AC Berth --> 236 Taka";
                             echo "<br>";
                             */

                             header('Location: ../View/DhakaToNarsingdiFareO.php');

  

                             }

                        

                       

                         else

                             {

                             

                             header('Location: InvalidFareO.php');


                             }

                        
           }



?>