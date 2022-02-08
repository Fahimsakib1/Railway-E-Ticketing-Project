<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    body
        {
            
                
            background-color: #C5C4C1 ;
            
            
             
            
        }

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

           #name /* Train Name */
           {
            width: 26.7%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 
           }

           #startingstation
           {
            width: 26.7%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 
           }

           #arrivalstation
           {
            width: 26.7%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 
           }

           #offday
           {
             width: 26.7%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }



</style>

<head>
  <!-- <script src="../asset/javaScript/NewAddTrainValidationO.js"></script> -->
  <script src="../asset/javaScript/NewTrainScheduleValidationO.js"></script> 
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

                       <font color = "green" > <h2> For Full Train Schedule, Visit: <a href="https://www.bproperty.com/blog/bangladesh-railway-map-train-line-route-pdf/"> Train Schedule</a> </h2> </font>


                        

                             <font color = "green" : align = middle> <h2> Make Train Schedule</h2> </font>
                      
                      
                            <form method="post" class="" action="../Model/DataBaseForNewTrainScheduleO.php" onsubmit="return validateForm()">



                              <label for="id">Train ID :</label>
                              <br>
                              <input type="text" placeholder="Enter Train ID" text-align="center" id="id" name="id">
                              <span class="error" id = "errorMsgID" ></span>
                              <br>


                              <!-- <label for="name">Train Name: </label> <br>                      
                               <input type="text" placeholder="Enter Train Name" id="name" name="name">
                               <span class="error" id = "errorMsgName" ></span>
                              <br> -->


                              <label for="name" >Train Name:</label>
                              <br>
                              <select name="name" id="name" >
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
                              <span class="error" id = "errorMsgName" ></span>
                              </select> 
                              <br>



                              


                              <!-- <label for="startingstation">Starting Station :</label>
                              <br>
                              <input type="text" placeholder="Enter Starting Station" id="startingstation" name="startingstation">
                              <span class="error" id = "errorMsgStartingstation" ></span>
                              <br>-->

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
                              <span class="error" id = "errorMsgStartingstation" ></span>
                              </select>
                              <br>




                              <label for="departuretime">Departure Time :</label>
                              <br>
                              <input type="text" placeholder="Enter Departure Time" id="departuretime" name="departuretime">
                              <span class="error" id = "errorMsgDeparturetime" ></span>
                              <br>



                              <!-- <label for="arrivalstation">Arrival Station :</label>
                              <br>
                              <input type="text" placeholder="Enter Arrival Station" id="arrivalstation" name="arrivalstation">
                              <span class="error" id = "errorMsgArrivalstation" ></span>
                              <br> -->


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
                              <span class="error" id = "errorMsgArrivalstation" ></span>
                              </select>
                              <br>



                              <label for="arrivaltime">Arrival Time:</label>
                              <br>
                              <input type="text" placeholder="Enter Arrival Time" id="arrivaltime" name="arrivaltime">
                              <span class="error" id = "errorMsgArrivaltime" ></span>
                              <br>


                              <!-- <label for="offday">Off Day:</label>
                              <br>
                              <input type="text" placeholder="Enter Off Day" id="offday" name="offday">
                              <span class="error" id = "errorMsgOffday" ></span>
                              <br>  -->


                              <label for="offday" >Off Day:</label>
                              <br>
                              <select name="offday" id="offday" >
                              <option value="Choose">Choose Off Day</option>    
                              <option value="Saturday">Saturday</option>
                              <option value="Sunday">Sunday</option>
                              <option value="Monday">Monday</option>
                              <option value="Tuesday">Tuesday</option>
                              <option value="Wednesday">Wednesday</option>
                              <option value="Thursday">Thursday</option>
                              <option value="Friday">Friday</option>
                              <span class="error" id = "errorMsgOffday" ></span>
                              </select>
                              <br>




                              <!--<input style="color: blue" class = "mainDivFormButton" type="submit" name="Add" value="Add"> -->



                              <input class = "mainDivFormButton" type="submit" name="Add" value="Add">
                              

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


