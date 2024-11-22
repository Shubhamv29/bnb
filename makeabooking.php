<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inetial-scale=1.0">
        <title>Edit Booking </title>
        <link rel="stylesheet">
<script src="//code.jquery.com/jquery-3.6.0.css"></script>
<script src="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"></script>
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
    <h1>Make a Booking</h1>
<h2><a href='listbookings.php'>[Return to Booking list]</a><a href='index.php'>[Return to the main page]</a></h2>

<form method="POST" action="makeabooking.php">
  <p>
    <label for="roomname">Room(name,type): </label>
    <input type="text" id="roomname" name="roomname" minlength="5" maxlength="50" required> 
  </p> 
  <p>
    Checkin date:
    <input type="date" id="datepicker" size="30" name="description" minlength="5" maxlength="200" required> 
  </p>  
  <p>
    Checkout date: 
    <input type="date" id="dateinput" size="30" name="description" minlength="5" maxlength="200" required> 
  </p> 
 
    <p class="contact"><label
for="phone">Mobile phone</label></p>
<input type="tel" id="phone"placeholder="(022)123-1234"pattern="[NC][\+]\d{2}[N)][0-9]{3}-[0-9]{4}"name="phone" required></p> 
  
   <input type="submit" name="submit" value="Add">
 </form>
      </body>
<script>
  $(function() {
    $(  "#datepicker" ).datepicker();
  });
  $( function(){
    $( "#dateinput" ).datepicker();
  });
  </script>
</html>
  