<!DOCTYPE HTML>
<html>
  <head>
        

        <style>
        table, th, td 
        {
  border: 1px solid black;
  border-collapse: collapse;
  }

th, td 
{
  padding: 2px;
} 

th 
{
  text-align: left;
}

</style>


    <title>Dashboard</title>
  </head>
  <body>
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">

      <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">


        <tr>
          <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
            <?php include 'Header2O.php';?>
          </td>
        </tr>

        <tr>
          

          <td>

            <table style="width: fit-content;">

              

              <font color = "green" : align = left> <h2>Updated Fare From Dhaka To Joydebpur</h2> </font>

              <tr>
              <th>Starting Station</th>
              <th>Arrival Station</th>
              <th>Shovon Chair</th>
              <th>AC Chair</th>
              <th>AC Berth</th>
              <th>Non-AC Berth</th>
             </tr>


             <tr>
             <td>Komlapur, Dhaka</td>
             <td>Joydebpur</td>
             <td>100 Taka</td>
             <td>157 Taka</td>
             <td>205 Taka</td>
             <td>165 Taka</td>
             
            
             </tr>

             
            </table>

            

            <br><br>

            <a href="UpdateFareForRouteO.php">Go Back</a><br><br>

          </td>
        </tr>
        <tr>


          <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
           <br>
            <?php include 'NewFooterO.php';?>
          </td>

        </tr>
      </table>
    <div>
  </body>
</html>