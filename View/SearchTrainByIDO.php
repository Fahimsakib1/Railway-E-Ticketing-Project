<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}
    input

          {

            width: 25%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

</style>

<head>
  <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>


    <?php

      //$value = "";
      $Tid = $Tname = $StartingStation = $ArrivalStation = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") 

      {


   

        $Tid= $_POST['Tid'];
        

         $flag=false;
        $myfile = fopen("../Data/AddTrain.txt", "r") or die("Unable to open file!");


       

          while ($line = fgets($myfile)) 

          {
              $words = explode(",",$line);
                 
              if($Tid==$words[0])

              {
                 //$Tname = $words[1];
                 //$StartingStation = $words[2];
                 //$ArrivalStation = $words[3];

                $flag=true;
                break;
              }

            
                 //$name = "Train Name Not Found";
                 //$StartingStation = " Starting Station Not Found";
                 //$ArrivalStation = " Arrival Station Not Found";

                  }


          if($flag)

          {
                  //echo " Train Found";
                  //$Value = " Train Found ";
                  header('Location: TrainFoundO.php');


          }

              else
              {
                  //echo " Train Not Found";
                  //$Value = " Train Not Found ";
                  header('Location: TrainNotFoundO.php');
              }


          fclose($myfile);


         
      }


    ?>



 
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Header2O.php'; ?>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
                    <?php include 'NavigationbarO.php'; ?>
                </td>
                <td>

                    <table width="75%">

                        

                             <font color = "green" : align = left> <h1>Search Train</h1> </font>
                      
                      
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                             <label for="">Enter Train ID To Search Train</label>
                             <br><br>


                             Train ID : <input type="text" placeholder="Enter Train ID" name="Tid" value="<?php echo $Tid; ?>">
                             <br>


                             <input class = "mainDivFormButtonSearchTrain" type="submit" name="Search" value="Search ">
                             


                             </form>




  

                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'NewFooterO.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>