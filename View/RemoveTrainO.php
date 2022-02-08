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
            box-shadow: 1px 1px 2px 1px blue; 

           }
</style>

<head>

  <script src="../asset/javaScript/RemoveTrainValidationO.js"></script>
  <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>



    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <br> <br> <br>
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

                        

                             <font color = "green" : align = left> <h1>Remove Train</h1> </font>
                      
                      
                             <form class="" action="../Model/DataBaseForRemoveTrainO.php"  method="post" onsubmit="return validateForm()">


                             <label for="">Enter Train ID To Remove Train</label>
                             <br><br>

                             Train ID  :<input type="text" placeholder="Enter Train ID" id ="Tid" name="Tid"> <br>
                             <span class="error" id ="errorMsgTid" ></span>
                              
                            
                             <input class = "mainDivFormButtonRemoveTrain" type="submit" name="Remove" value="Remove">
                             
                             </form> <br> <br>

  

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