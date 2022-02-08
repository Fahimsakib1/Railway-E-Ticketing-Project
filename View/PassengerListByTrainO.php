<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    body
        {
            
                
            background-color: #C5C4C1  ;
         
        }

    input

           {

            width: 23%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

            #trainName
           {
            width: 26%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 
           }
</style>

<head>
    <script src="../asset/javaScript/PassengerListByTrainValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>



<?php
          


    

          require('../Controller/PassengerListByTrainControllerO.php');




        ?>



        

<body>
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <br> <br> 
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
                                <font color = "blue" : align = middle> <h2>Passenger List By Train</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForPassengerListByTrainO.php" onsubmit="return validateForm()" > 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   Train ID  :<br> <input type="text" placeholder="Enter Train ID" id = "trainID" name="trainID"><span class="error" id = "errorMsgtrainID"> <?php echo $trainIDErr; ?></span>
                                    <br>

                                    <!-- Train Name  : <br> <input type="text" placeholder="Enter Train Name" id = "trainName" name="trainName"><span class="error" id = "errorMsgtrainName"> <?php //echo $trainNameErr; ?></span>
                                    <br> -->


                                    <label for="trainname" >Train Name:</label>
                                    <br>
                                    <select name="trainName" id="trainName" >
                                    <option value="Choose">Choose Train Name</option>    
                                    <option value="Dinajpur Express">Dinajpur Express</option>
                                    <option value="Panchagarh Express">Panchagarh Express</option>
                                    <option value="Ekota Express">Ekota Express</option>
                                    <option value="Drutojan">Drutojan</option>
                                    <option value="Mohanagar Express">Mohanagar Express</option>
                                    <option value="Tista Express">Tista Express</option>
                                    <option value="Upokul Express">Upokul Express</option>
                                    <option value="Meghna Express">Meghna Express</option>
                                    <option value="Turna Express">Turna Express</option>
                                    <option value="Jamuna Express">Jamuna Express</option>
                                    <option value="Bijoy Express">Bijoy Express</option>
                                    <option value="Shonar Bangla Express">Shonar Bangla Express</option>
                                    <option value="Kishorganj Express">Kishorganj Express</option>
                                    <option value="Agni-Bina Express">Agni-Bina Express</option>
                                    <option value="Rangpur Express">Rangpur Express</option>
                                    <option value="Thakurgaon Express">Thakurgaon Express</option>
                                    <span class="error" id ="errorMsgTrainname"> </span>
                                    </select> 
                                    <br>


                                    <input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
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