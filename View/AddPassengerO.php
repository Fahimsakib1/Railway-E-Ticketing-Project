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

</style>

<head>
  <!-- <script src="../asset/javaScript/NewAddTrainValidationO.js"></script> -->
  <script src="../asset/javaScript/AddPassengerValidationO.js"></script> 
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

                       

                        

                             <font color = "blue" : align = middle> <h2> Add Passenger's Information</h2> </font>
                      
                      
                            <form method="post" class="" action="../Model/DataBaseForPassengerDetailsO.php" onsubmit="return validateForm()">


                              <label for="name">Passenger Name :</label>
                              <br>
                              <input type="text" placeholder=" Enter Name" text-align="center" id="name" name="name">
                              <span class="error" id = "errorMsgname" ></span>
                              <br>


                              <label for="address">Address: </label>     <br>                       
                               <input type="text" placeholder=" Enter Address" id="address" name="address">
                               <span class="error" id = "errorMsgaddress" ></span>
                              <br>


                              <label for="phone">Phone :</label>
                              <br>
                              <input type="text" placeholder=" Enter Phone" id="phone" name="phone">
                              <span class="error" id = "errorMsgphone" ></span>
                              <br>


                              <label for="journeydate">Journey Date :</label>
                              <br>
                              <input type="date" placeholder=" Enter Journey Date" id="journeydate" name="journeydate">
                              <span class="error" id = "errorMsgjourneydate" ></span>
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