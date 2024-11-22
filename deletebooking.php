<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inetial-scale=1.0">
        <title>Edit Booking </title>
</head>
<body>

<link rel="stylesheet"
href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


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
    <h4>Room name:</h4>
<p>sophie</p>
<h4>Checkin date:</h4>
<p>15/10/2023</p>
<h4>Checkout date:</h4>
<p>08/11/2023</p>
    <h2>Are you sure you want to delete this Room?</h2>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="submit" name="submit" value="Delete">
     <a href="listbookings.php">[Cancel]</a>
     </form>
     </body>
</html>
