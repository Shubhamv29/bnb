<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inetial-scale=1.0">
        <title>Edit Booking </title>
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
    <h1>Make a Review</h1>
<h2><a href='listbookings.php'>[Return to the room listing]</a><a href='index.php'>[Return to the main page]</a></h2>

<h3>Room Review</h3>
<input type="text" id="roomname" name="roomname" minlength="5" maxlength="50" required> 
<input type="submit" name="submit" value="Update">
    </body>
    </html>
