<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:doctor.login.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .input-form-box {
  width: 100px;
  margin: auto;
  margin-top: 20px;
  padding: 5px;
  background: rgba(355, 400,400, 0.3); /* Adjust the alpha value for transparency */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow for a blur effect */
  border-radius: 20px;
}


/* Add a backdrop filter for a blur effect */



    </style>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/logo.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/dinsert_style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />
  <title> Insert </title>
</head>
<body style="background-image: url(Resource/bag.jpg); background-size: cover;">>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

  <div class="top_img"><img src="Resource/logo12.jpg"></div>
  <div class="navigation-bar" style="text-align: center">
    <a href="udashboard.php" >Home</a>
    <a href="urecords.php">Records </a>
    <!--<a href="dsearch.php">Search</a>-->
    <a href="uinsert.php">Client Support</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>

  <script>
  jQuery(function($) {
      $("#date").datepicker();
  });
  </script>

  <script>
  jQuery(function($) {
      $("#time").timepicker({
        timeFormat: "hh:mm tt"
      });
  });
</script>



  <?php
  if (isset($_GET["error"]))
   {
    if($_GET["error"]=="wronguser")
    {
      echo "<div class='welcome' style='color: #D61A3C'><h2 class='welcome_mssg'> Wrong User ID </h2></div>";
    }
  }
  elseif (isset($_GET["login"])) {
      if ($_GET["login"]=="success") {
        echo "<div class='welcome' style='color: #97DC21'><h2 class='welcome_mssg'> Record Saved Successfully </h2></div>";
      }
    }
  elseif(!isset($_POST["choice-submit"])){
      echo "<div class='welcome'><h2 class='welcome_mssg'>Support Ticket Form</h2></div>
      <div class='input-form-box'>
        <form class='input-form' action='uinsert_nut.php' method='post'>
    
    
          <label for='proteins'><h3>Project ID</h3></label>
          <textarea name='proteins' placeholder='Enter Project ID'></textarea><br>
    
          <label for='calories'><h3>Description</h3></label>
          <textarea name='calories' placeholder='Enter Description' ></textarea><br>
    
          <input type='submit' name='input-submit' value='Save'>
        </form>
    
      </div>";
    }

  
 ?>



</body>
</html>
