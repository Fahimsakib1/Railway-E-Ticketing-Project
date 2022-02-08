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


      $Tid = $Tname = $StartingStation = $ArrivalStation = "";

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") 

      {


        $Tid= $_POST['Tid'];
        $Tname=$_POST['Tname'];
        $StartingStation=$_POST['StartingStation'];
        $ArrivalStation=$_POST['ArrivalStation'];

        //$user = fopen("AddTrain.txt", "a") or die("Unable to open file!");
        $user = fopen("../Data/AddTrain.txt", "a") or die("Unable to open file!");


        fwrite($user, $Tid. "," . $Tname. ",". $StartingStation. ",". $ArrivalStation);
        fwrite($user, "\n");
        fclose($user);

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

                        

                             <font color = "blue" : align = middle> <h2>Add Train</h2> </font>
                      
                      
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                              <label for="Tid">Train ID  :</label>
                              
                              <input type="text" placeholder="Enter Train ID" text-align="center" name="Tid" value="<?php echo $Tid; ?>">
                              <br><br>


                              <label for="Tname">Train Name : </label>
                              
                               <input type="text" placeholder="Enter Train Name" name="Tname" value="<?php echo $Tname; ?>">
                              <br><br>



                              <label for="StartingStation">Starting Station :</label>
                              
                              <input type="text" placeholder="Enter Starting Station" name="StartingStation" value="<?php echo $StartingStation; ?>">
                              <br><br>


                              <label for="ArrivalStation">Arrival Station :</label>
                              
                              <input type="text" placeholder="Enter Arrival Station" name="ArrivalStation" value="<?php echo $ArrivalStation; ?>">
                              <br><br>


                              <input class = "mainDivFormButton" type="submit" name="Add" value="Add Train">
                              <br><br>

                             


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