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
              
               <h2>CHANGED TICKET STATUS</h2>

              <tr>
              <th>Ticket ID</th>
              <th>Passenger Name</th>
              <th>Previous Journey Date</th>
              <th>New Journey Date</th>
              <th>Previous Destination</th>
              <th>New Destination</th>
             </tr>

             <tr>
             <td>1111</td>
             <td>Faysal</td>
             <td>20-11-2020</td>
             <td>25-11-2020</td>
             <td>Rangpur</td>
             <td>Gaibandha</td>
             </tr>

             <tr>
             <td>2222</td>
             <td>Rakib</td>
             <td>17-11-2020</td>
             <td>24-11-2020</td>
             <td>Khulna</td>
             <td>Dhaka</td>
             </tr>


            <tr>
             <td>3333</td>
             <td>Sayem</td>
             <td>02-12-2020</td>
             <td>04-12-2020</td>
             <td>Dinajpur</td>
             <td>No Change</td>
             </tr>

             <tr>
             <td>4444</td>
             <td>Ratul</td>
             <td>28-11-2020</td>
             <td>25-11-2020</td>
             <td>Sirajgang</td>
             <td>No Change</td>
             </tr>

             <tr>
             <td>5555</td>
             <td>Niloy</td>
             <td>14-12-2020</td>
             <td>24-12-2020</td>
             <td>Thakurgaon</td>
             <td>Panchagarh</td>
             </tr>

             <tr>
             <td>6666</td>
             <td>Saif</td>
             <td>19-11-2020</td>
             <td>02-12-2020</td>
             <td>Khulna</td>
             <td>Dinajpur</td>
             </tr>

             <tr>
             <td>7777</td>
             <td>Nayem</td>
             <td>19-12-2020</td>
             <td>24-12-2020</td>
             <td>Mymensingh</td>
             <td>Dhaka</td>
             </tr>

             


            </table>
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