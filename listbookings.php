<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inetial-scale=1.0">
        <title>Current Bookings</title>
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
    <h1>Current Bookings</h1>
    <h2><a href="makeabooking.php">[Make a Booking]</a>
    <a href="index.php">[Return to main page]</a>
</h2>

<table border="1">
    <thread>
        <tr>
            <th>Booking(Rooms, Dates)</th>
            <th>Coustmers</th>
            <th>Actions</th>
        </tr>  
        <tr>
            <td>lily,(3/11/2023,5/11/2023)</td>
            <td>shelly</td>
            <td> <a href="editbooking.php">[Edit]</a><a href="viewbooking.php">[View]</a><a href="reviewebooking.php">[ReviewsManage]</a><a href="deletebooking.php">[Delete]</a></td>
        </tr> 
        <tr>
            <td>grorge,(27/10/2023,31/10/2023)</td>
            <td>matheson</td>
            <td> <a href="editbooking.php">[Edit]</a><a href="viewbooking.php">[View]</a><a href="reviewebooking.php">[ReviewsManage]</a><a href="deletebooking.php">[Delete]</a></td>
    </tr>
    <tr>
        <td>lily(25/10/2023,02/11/2023)</td>
        <td>Tamara</td>
        <td> <a href="editbooking.php">[Edit]</a><a href="viewbooking.php">[View]</a><a href="reviewebooking.php">[ReviewsManage]</a><a href="deletebooking.php">[Delete]</a></td>
    </tr>
    <tr>
        <td>grorge(30/10/2023,01/11/2023)</td>
        <td>Jade</td>
        <td> <a href="editbooking.php">[Edit]</a><a href="viewbooking.php">[View]</a><a href="reviewebooking.php">[ReviewsManage]</a><a href="deletebooking.php">[Delete]</a></td>
    </tr>
