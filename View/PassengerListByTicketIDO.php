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
            box-shadow: 1px 1px 2px 1px green; 

           }

</style>

<head>
    <script src="../asset/javaScript/PassengerListByTicketIDValidationO.js"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/styleO.css">

</head>

<body>

           <?php
          


    

          //require('../Controller/PassengerListByTicketIDControllerO.php');




        ?>





    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <br> <br> <br> <br>
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
                                <h2> See Passenger List By Ticket ID</h2>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForPassengerListByTicketIDO.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   
                                   <!-- Main Ticket ID Code -->
                                   <!-- Ticket ID  :  <input type="text" id = "ticketID" name="ticketID"><span class="error" id = "errorMsgticketID"> <?php //echo $ticketIDErr; ?></span>
                                    <br><br> -->


                                    Ticket ID  :  <input type="text" placeholder="Enter Ticket ID" id = "ticketID" name="ticketID"><span class="error" id = "errorMsgticketID"> </span>
                                    <br><br>


                                    <input  class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
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