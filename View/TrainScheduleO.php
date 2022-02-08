
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
          <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
            <?php include 'NavigationbarO.php';?>
          </td>

          <td>

            <table style="width: fit-content;">


              

              <font color = "green" > <h2> For Full Train Schedule, Visit: <a href="https://www.bproperty.com/blog/bangladesh-railway-map-train-line-route-pdf/"> Train Schedule</a> </h2> </font>
            

              
               <font color = "red" > <h2>Train Schedule</h2> </font>

              <tr>
              <th>Train ID</th>
              <th>Train Name</th>
              <th>Starting Station</th>
              <th>Departure Time</th>
              <th>Arrival Station</th>
              <th>Arrival Time</th>
              <th>Off Day</th>

             </tr>

             <tr>
             <td>702</td>
             <td>Subarna Express</td>
             <td>Dhaka</td>
             <td>16:30</td>
             <td>Chattogram</td>
             <td>21:50</td>
             <td>Friday</td>
             </tr>

             <tr>
             <td>704</td>
             <td>Mahanagar Provati</td>
             <td>Dhaka</td>
             <td>7:45</td>
             <td>Chattogram</td>
             <td>14:00</td>
             <td>No Off Day</td>
             </tr>


            <tr>
             <td>705</td>
             <td>Ekota Express</td>
             <td>Dhaka</td>
             <td>10:10</td>
             <td>Dinajpur</td>
             <td>21:00</td>
             <td>Tuesday</td>
             </tr>

             <tr>
             <td>707</td>
             <td>Tista Express</td>
             <td>Dhaka</td>
             <td>7:30</td>
             <td>Dewangonj</td>
             <td>12:40</td>
             <td>Monday</td>
             </tr>

             <tr>
             <td>709</td>
             <td>Pravat Express</td>
             <td>Dhaka</td>
             <td>6:20</td>
             <td>Sylhet</td>
             <td>13:00</td>
             <td>Tuesday</td>
             </tr>

             <tr>
             <td>712</td>
             <td>Upokul Express</td>
             <td>Dhaka</td>
             <td>15:20</td>
             <td>Noakhali</td>
             <td>21:20</td>
             <td>Wednesday</td>
             </tr>

             <tr>
             <td>717</td>
             <td>Joyontika Express</td>
             <td>Dhaka</td>
             <td>11:15</td>
             <td>Sylhet</td>
             <td>19:00</td>
             <td>No Off Day</td>
             </tr>


            </table>
            <br><br>
          </td>
        </tr> 


        <tr>


          <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
            <?php include 'NewFooterO.php';?>
          </td>

        </tr>


      </table>
    <div>
  </body>
</html>