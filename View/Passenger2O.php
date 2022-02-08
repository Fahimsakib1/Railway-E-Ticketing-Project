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
              
               <h2>Passenger Details By Ticket ID </h2>

              <tr>
              <th>Ticket ID</th>
              <th>Passenger Name</th>
              <th>Journey Date</th>
              <th>Journey Time</th>
              <th>Staring Station</th>
              <th>Destination</th>
              <th>Arrival Time </th>
              <th>Mobile</th>


             </tr>
             <tr>
             <td>0002</td>
             <td>Saif</td>
             <td>12-12-2020</td>
             <td>12:10 AM</td>
             <td>Dhaka</td>
             <td>Khulna</td>
             <td>6:00 AM</td>
             <th>01926457421</th>
             </tr>

             
            </table>
            <br><br>

            <a href="PassengerListByTicketIDO.php">Go Back</a><br><br>
            
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