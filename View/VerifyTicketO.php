
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

            width: 35%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }


        </style>

<head>

    <script src="../asset/javaScript/VerifyTicketValidationO.js"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    

</head>

<body>

        <?php
          
          require('../Controller/VerifyTicketControllerO.php');

        ?>


    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <br> <br> <br> <br> <br>

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
                       

                        <font color = "blue" : align = left> <h2> Verify Ticket</h2> </font>


                        <form method="post" action="../Model/DataBaseForVerifyTicketO.php" onsubmit="return validateForm()" > 
                        <tr>
                            

                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    <!-- Name: <br>
                                    <input type="text" id="name" name="name">
                                    <span class="error" id ="errorMsgName"> <?php //echo $nameErr; ?></span>
                                    <br>



                                    Ticket ID: <br>
                                    <input type="text" id="ticketID" name="ticketID">
                                    <span class="error" id ="errorMsgticketID"> <?phpecho $ticketIDErr; ?></span>
                                    <br> -->



                                    
                                    Mobile:<br>
                                    <input type="text" placeholder="Enter Mobile Number" id="mobile" name="mobile">
                                    <span class="error" id ="errorMsgMobile"> <?php echo $mobileErr; ?></span>
                                    <br> 


                                    




                                    <input class = "mainDivFormButton" type="submit" name="submit" value="Verify">
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