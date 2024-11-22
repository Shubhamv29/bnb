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
<h1>Edit a Booking</h1>
<h2><a href='listbookings.php'>[Return to the room listing]</a><a href='index.php'>[Return to the main page]</a></h2>

<form method="POST" action="editroom.php">
  <input type="hidden" name="id" value="<?php echo $id;?>">
   <p>
    <label for="roomname">Room name: </label>
    <input type="text" id="roomname" name="roomname" minlength="5" maxlength="50" value="<?php echo $row['roomname']; ?>" required> 
  </p> 
  <p>
    <label for="description">Description: </label>
    <input type="text" id="description" name="description" size="100" minlength="5" maxlength="200" value="<?php echo $row['description']; ?>" required> 
  </p>  
  <p>  
    <label for="roomtype">Room type: </label>
    <input type="radio" id="roomtype" name="roomtype" value="S" <?php echo $row['roomtype']=='S'?'Checked':''; ?>> Single 
    <input type="radio" id="roomtype" name="roomtype" value="D" <?php echo $row['roomtype']=='D'?'Checked':''; ?>> Double 
   </p>
  <p>
    <label for="beds">Beds (1-5): </label>
    <input type="number" id="beds" name="beds" min="1" max="5" value="1" value="<?php echo $row['beds']; ?>" required> 
  </p> 
   <input type="submit" name="submit" value="Update">
 </form>
</body>
</html>