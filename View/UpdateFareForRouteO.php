<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 30%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }
</style>

<head>
    <script src="../asset/javaScript/UpdateFareForRouteValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>


        <?php
          
         //header('Location: ../View/DhakaToJoydebpurFare.php');
 
          require('../Controller/UpdateFareForRouteControllerO.php');

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
                        
                        <tr>
                            <td colspan="3">
                                <font color = "red" : align = left> <h2>Update Fare For Rutes</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-middle">


                                   Starting Station  : <input type="text" placeholder="Enter Starting Station" id = "StartingStation" name="StartingStation"> <br>
                                   <span class="error" id="errorMsgStartingStation"> <?php echo $StartingStationErr; ?></span>
                                    <br><br>

                                    Arrival Station  : <input type="text" placeholder="Enter Arrival Station" id ="ArrivalStation" name="ArrivalStation"> <br>
                                    <span class="error" id="errorMsgArrivalStation"> <?php echo $ArrivalStationErr; ?></span>
                                    <br><br>


                                    <input class = "mainDivFormButton" type="submit" name="Update" value="Update">
                                    <br><br>


                                </p>
                            </td>


                            <td align="left">


                    
                    <font color = "green" : align = left> <h2>To Check Updated Fare Details</h2> </font><a href="\project\Web-Tech-Final-Project\False Railway\asset\image\Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font>
                    


                </td>




                        </tr>

                        
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