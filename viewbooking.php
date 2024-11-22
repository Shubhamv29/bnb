<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inetial-scale=1.0">
        <title>view booking detail</title>
</head>
<body>
    <?php
       include "config.php"; //load in any variables
       $DBC = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBDATABASE);
       
       //insert DB code from here onwards
       //check if the connection was good
       if (mysqli_connect_errno()) {
           echo "Error: Unable to connect to MySQL. ".mysqli_connect_error() ;
           exit; //stop processing the page further
       }


    ?>
    <h1>Booking Details View</h1>
<h2><a href='listbookings.php'>[Return to Booking listing]</a><a href='index.php'>[Return to the main page]</a></h2>
<h4>Room name:</h4>
<p>sophie</p>
<h4>Checkin date:</h4>
<p>15/10/2023</p>
<h4>Checkout date:</h4>
<p>08/11/2023</p>
<h4>Contact Number</h4>
<p>(001)123 1234</p>
<h4>Extras:</h4>
<p>Nothing</p>

</table>
</body>
</html>
  