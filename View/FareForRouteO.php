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

            width: 45%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

           #startingstation
           {
            width: 49%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue;

           }

           #arrivalstation
           {
            width: 49%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue;
           }
</style>

<head>
    
    <script src="../asset/javaScript/FareForRouteValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>




    <?php
          


    

          require('../Controller/FareForRouteControllerO.php');




        ?>



        
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <br> 
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
                                <font color = "red" : align = left> <h2>Fare For Rutes</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForFareForRouteO.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   <!-- Starting Station  : <br>  <input type="text" placeholder="Enter Starting Station" id = "startingstation" name="startingstation"><span class="error" id = "errorMsg1" ><?php //echo $startingstationErr; ?></span>
                                    <br> -->


                                    <!-- Arrival Station  : <br> <input type="text" placeholder="Enter Arrival Station" id = "arrivalstation" name="arrivalstation"><span class="error" id = "errorMsg2" > <?php //echo $arrivalstationErr; ?></span>
                                    <br> -->



                                    <label for="startingstation" >Starting Station:</label>
                                    <br>
                                    <select name="startingstation" id="startingstation" >
                                    <option value="Choose">Choose Starting Station</option>    
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                    <option value="Tangail">Tangail</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Lalmonihaath">Lalmonihaath</option>
                                    <span class="error" id = "errorMsg1" ><?php //echo $startingstationErr; ?></span>                                   
                                    </select> 
                                    <br>


                                    <label for="arrivalstation" >Arrival Station:</label>
                                    <br>
                                    <select name="arrivalstation" id="arrivalstation" >
                                    <option value="Choose">Choose Arrival Station</option>    
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                    <option value="Tangail">Tangail</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Lalmonihaath">Lalmonihaath</option>
                                    <span class="error" id = "errorMsg2" > <?php //echo $arrivalstationErr; ?></span>                                   
                                    </select> 
                                    <br> 


                                    <input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
                            </td>


                            <td align="left">


                    
                    <!-- <font color = "green" : align = left> <h2>Full Fare Details</h2> </font><a href="Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font> -->

                    <font color = "green" : align = left> <h2>Full Fare Details</h2> </font><a href="\project\Web-Tech-Final-Project\False Railway\asset\image\Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font>
                    

                    


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