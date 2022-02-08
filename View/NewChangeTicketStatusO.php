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

            width: 25%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

           #newdestination
           {
            width: 27%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

           #previousdestination
           { 

            width: 27%;
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
  <script src="../asset/javaScript/NewChangeTicketStatusValidationO.js"></script> 
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
                <td style="border: 3px solid #000 ; border-collapse: collapse; " width="20%">
                    <?php include 'NavigationbarO.php'; ?>
                </td>
                <td>

                    <table width="75%">

                       <font color = "green" > <h2> Changed Ticket Details: <a href="ChangeTicketStatusO.php"> Click here</a> </h2> </font>


                        

                             <font color = "red" : align = middle> <h2> Change Ticket Information</h2> </font>
                      
                      
                            <form method="post" class="" action="../Model/DataBaseForChangeTicketStatusO.php" onsubmit="return validateForm()">


                              <label for="id">Ticket ID :</label>
                              <br>
                              <input type="text" placeholder="Enter Ticket ID" text-align="center" id="id" name="id">
                              <span class="error" id = "errorMsgID" ></span>
                              <br>


                              <label for="name">Passenger Name: </label>     <br>                       
                               <input type="text" placeholder="Enter Passenger Name" id="name" name="name">
                               <span class="error" id = "errorMsgName" ></span>
                              <br>
                              


                              <label for="previousdate">Previous Journey Date :</label>
                              <br>
                              <input type="date" placeholder="Enter Previous Journey Date" id="previousdate" name="previousdate">
                              <span class="error" id = "errorMsgPreviousdate" ></span>
                              <br>


                              <label for="newdate">New Journey Date :</label>
                              <br>
                              <input type="date" placeholder="Enter New Journey Date" id="newdate" name="newdate">
                              <span class="error" id = "errorMsgNewdate" ></span>
                              <br>


                              <!-- <label for="previousdestination">Previous Destination :</label>
                              <br>
                              <input type="text" placeholder="Enter Previous Destination" id="previousdestination" name="previousdestination">
                              <span class="error" id = "errorMsgPreviousdestination" ></span>
                              <br> -->



                              <!-- <label for="newdestination">New Destination:</label>
                              <br>
                              <input type="text" placeholder="Enter New Destination" id="newdestination" name="newdestination">
                              <span class="error" id = "errorMsgNewdestination" ></span>
                              <br> -->

                            
                              <label for="newdestination" >Previous Destination:</label>
                              <br>
                            <select name="previousdestination" id="previousdestination" >
                              <option value="Choose">Choose Previous Destination</option>   
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
                              <span class="error" id = "errorMsgPreviousdestination" ></span>                              
                              </select> 
                              <br> 



                              <label for="newdestination" >New Destination:</label>
                              <br>
                              <select name="newdestination" id="newdestination" >
                              <option value="Choose">Choose New Destination</option>    
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
                              <span class="error" id = "errorMsgNewdestination" ></span>                              
                              </select> 
                              <br> 



                              <!--<input style="color: blue" class = "mainDivFormButton" type="submit" name="Add" value="Add"> -->



                              <input class = "mainDivFormButton" type="submit" name="Add" value="Change">
                              

                              
                              
                              

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