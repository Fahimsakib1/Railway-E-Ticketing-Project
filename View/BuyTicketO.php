<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

    body
        {
            
                
            /*background-color: #D3F48E  ;*/
            background-color:#C5C4C1;
            
            
             
            
        }

    input

           {

            width: 42%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

           #trainname
           {
            width: 46%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 
           }

           #destination
           {
            width: 46%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 
           }


        </style>

<head>

    <script src="../asset/javaScript/BuyTicketValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>

        


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

                        <font color = "blue" : align = middle> <h2> Buy Ticket</h2> </font>

                         <form method="post" action="../Model/DataBaseForBuyTicketO.php" onsubmit="return validateForm()" > 

                        <tr>
                            
                            <!-- action="../Model/DataBaseForPassengerDetailsO.php" 
                                action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" -->

                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    User Name: <br>
                                    <input type="text" placeholder="Enter Name" id="name" name="name">
                                    <span class="error" id ="errorMsgName"> </span>
                                    <br>


                                    <!-- Train Name: <br>
                                    <input type="text" placeholder="Enter Train Name" id="trainname" name="trainname"> 
                                    <span class="error" id ="errorMsgTrainname"> </span>
                                    <br> -->


                                    <label for="trainname" >Train Name:</label>
                                    <br>
                                    <select name="trainname" id="trainname" >
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

                                    



                                    <label for="destination" >Destination:</label>
                                    <br>
                                    <select name="destination" id="destination" >
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
                                    <span class="error" id ="errorMsgDestination"> </span>                              
                                    </select> 
                                    <br> 




                                    <!-- Destination: <br>
                                    <input type="text" placeholder="Enter Destination" id="destination" name="destination">
                                    <span class="error" id ="errorMsgDestination"> </span> 
                                    <br> -->

                                    

                                    Mobile: <br>
                                    <input type="text" placeholder="Enter Mobile" id="mobile" name="mobile">
                                    <span class="error" id ="errorMsgMobile"> </span>
                                    <br>


                                    <input class = "mainDivFormButton" type="submit" name="submit" value="Buy">
                                    <br>


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