<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

     body
        {
            
                
            background-color:#C5C4C1  ;
            
           
        }

    input

           {

            width: 35%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

           #traainname 
           {
            width: 39%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 
           }
#startingstation
           {
            width: 39%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green;
           }
           

           #arrivalstation
           {
            width: 39%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green;
           }
       
</style>

<head>
    <script src="../asset/javaScript/JSONViewPageValidationO.js"> </script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>


        <?php
          
         //header('Location: ../View/DhakaToJoydebpurFare.php');
 
          //require('../Controller/NewUpdateFareForRouteControllerO.php');

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
                                <font color = "blue" : align = middle> <h2> JavaScript Object Notation (JSON)</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForJSONExampleO.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-middle">


                                   Name: <br>
                                   <input type="text" placeholder="Add Name " id = "name" name="name"> <br>
                                   <span class="error" id="errorMsgsname"> <?//php echo $startingstationErr; ?></span>
                                    


                                    Address:<br>
                                    <input type="text" placeholder="Add Address " id ="address" name="address"> <br>
                                    <span class="error" id="errorMsgaddress"> <?//php echo $arrivalstationErr; ?></span>
                                    

                                    Mobile:<br>
                                     <input type="text" placeholder="Add Mobile Number " id ="mobile" name="mobile"> <br> 
                                    <span class="error" id="errorMsgmobile"> <?//php echo $shovonchairErr; ?></span>
                                    



                                    <!-- University: <br>
                                    <input type="text" placeholder="Add University" id ="university" name="university">  <br>
                                    <span class="error" id="errorMsguniversity"> <?//php echo $acchairErr; ?></span> -->
                                   
                                    

                              <label for="trainname" >Train Name:</label>
                              <br>
                              <select name="trainname" id="traainname" >
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
                              <span class="error" id = "errorMsgtrainname" ></span>
                              </select> 
                              <br>



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
                              <span class="error" id = "errorMsgstartingstation" ></span>
                              </select>
                              <br>



                                    <!-- Department: <br>
                                    <input type="text" placeholder="Add Department" id ="department" name="department"> <br>
                                    <span class="error" id="errorMsgdepartment"> <?//php echo $acberthErr; ?></span> -->


                                    


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
                              <span class="error" id = "errorMsgarrivalstation" ></span>
                              </select>
                              <br>

                              <input class = "mainDivFormButton" type="submit" name="Update" value="Done">
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