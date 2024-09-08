<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:admin.login.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
  .input-form-box {
    width: 300px;
    margin: auto;
    margin-top: 50px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.4);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    position: relative;
  }
  </style>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/logo.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/aregister_style.css">
 <!-- <link rel="stylesheet" type="text/css" href="css/dinsert_style.css">-->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />

  <title> Register </title>
</head>
<body style="background-image: url(Resource/bag.jpg); background-size: cover;">>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

  <div class="top_img"><img src="Resource/logo3.jpg"></div>
  <div class="navigation-bar" style="text-align: center">
    <a href="arecords.php" >Records</a>
    <!--<a href="asearch.php" >Search </a>-->
    <a href="aregister.php">Register</a>
    <a href="adelete.php">Delete</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>
  <script>
  jQuery(function($) {
      $("#date").datepicker();
  });
  </script>
  <script>
  jQuery(function($) {
      $("#date1").datepicker();
  });
  </script>

  <script>
  jQuery(function($) {
      $("#time").timepicker({
        timeFormat: "hh:mm tt"
      });
  });
</script>
<script>
  jQuery(function($) {
      $("#time1").timepicker({
        timeFormat: "hh:mm tt"
      });
  });
</script>


  <script>
  jQuery(function($) {
      $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange:"1920:2020"
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
    elseif ($_GET["error"]=="wronghid") {
      echo "<div class='welcome' style='color: #D61A3C'><h2 class='welcome_mssg'> Wrong Activity id ID </h2></div>";
    }
  }
  elseif (isset($_GET["login"])) {
      if ($_GET["login"]=="success") {
        echo "<div class='welcome' style='color: #97DC21'><h2 class='welcome_mssg'> Registration Successful </h2></div>";
      }
    }
  elseif(!isset($_POST["choice-submit"])){
      echo "<div class='welcome'><h2 class='welcome_mssg'> Choose a Category</h2></div>
      
      <div class='choice_form_box'>
        <form class='choice_form' action='aregister.php' method='post'>
          <label for='ch'>Client</label>
          <input type='checkbox' name='ch' value='1'><br>
          <label for='ch'>Services</label>
          <input type='checkbox' name='ch' value='2'><br>
          <label for='ch'>Contract</label>
          <input type='checkbox' name='ch' value='3'><br>
          <label for='ch'>Project</label>
          <input type='checkbox' name='ch' value='4'><br>
          <label for='ch'>Update Tickets</label>
          <input type='checkbox' name='ch' value='5'><br>
          <input type='submit' name='choice-submit' value='NEXT'>
        </form>
      </div>";
    }

    else {
      if ($_POST["ch"]=="1") {
        echo "<div class='welcome'><h2 class='welcome_mssg'> Client Registration Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='aregister_p.php' method='post'>
      <label for='pssn'><h3>Client ID</h3></label>
      <input type='text' name='pssn' placeholder='Enter a valid Client ID' required><br>

      <label for='fname'> <h3>Name</h3></label>
      <input type='text' name='fname' placeholder='Enter  Name' required><br>

      <label for='adr'><h3>Address</h3></label>
      <input type='text' name='adr' placeholder='Current Address' required ><br>
      
      <label for='cno'><h3>Contact No.</h3></label>
      <input type='text' name='cno' placeholder='Contact No.' required><br>

      <label for='mail'><h3>Email</h3></label>
      <input type='text' name='mail' placeholder='Email' required;><br>

      <label for='date'><h3>Date of Registration</h3></label>
      <input type='text' name='dob' id='date' placeholder='Date of Registration' required><br>


      <label for='pass'><h3>Password</h3></label>
      <input type='text' name='pass' placeholder='Password' required><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }
      elseif ($_POST["ch"]=="2") {
          echo " <div class='welcome'><h2 class='welcome_mssg'> Services Form</h2></div>
    <div class='input-form-box'>
      <form class='input-form' action='aregister_d.php' method='post'>
        <label for='dssn'><h3>Service ID</h3></label>
        <input type='text' name='dssn' placeholder='Enter valid Service ID' required><br>

        <label for='service'><h3>Service Name</h3></label>
        <input type='text' name='service' placeholder='Enter Service Name' required><br>

        <label for='des'><h3>Description</h3></label>
        <input type='text' name='des' placeholder='Service Description'><br>

        <label for='pri'><h3>Price</h3></label>
        <input type='text' name='pri' placeholder='Enter Price'><br>

       
        <input type='submit' name='input-submit' value='Save'>
      </form>

    </div>";
      }

      elseif ($_POST["ch"]=="3") {
        echo "  <div class='welcome'><h2 class='welcome_mssg'> Contract Form</h2></div>
  <div class='input-form-box'>
    <form class='input-form' action='aregister_s.php' method='post'>
      <label for='sssn'><h3>Client ID</h3></label>
      <input type='text' name='sssn' placeholder='Enter a valid Client ID' required><br>

      <label for='conid'><h3>Contract ID</h3></label>
      <input type='text' name='coid' placeholder='Enter Contract ID' required><br>


      <label for='sid'><h3>Service ID</h3></label>
      <input type='text' name='sid' placeholder='Enter valid service id ' required><br>

      <label for='date'><h3>Start Date</h3></label>
      <input type='text' name='sdate' id='date' placeholder='Start Date' required><br>

      <label for='date1'><h3>End Date</h3></label>
      <input type='text' name='edate' id='date1' placeholder='End Date' required><br>

      <input type='submit' name='input-submit' value='Save'>
    </form>

  </div>";
      }

    elseif ($_POST["ch"]=="4") {
      echo "  <div class='welcome'><h2 class='welcome_mssg'> Project Registration Form</h2></div>
<div class='input-form-box'>
  <form class='input-form' action='aregister_h.php' method='post'>
    <label for='cid'><h3>Client ID</h3></label>
    <input type='text' name='c_id' placeholder='Enter a valid client ID' required><br>

    <label for='pid'><h3>Project ID</h3></label>
    <input type='text' name='pid' placeholder='Enter Project ID' required><br>

    <label for='adr'><h3>Project Name</h3></label>
    <input type='text' name='pn' placeholder='Enter project name' required ><br>

    <label for='st'><h3>Status</h3></label>
    <input type='text' name='st' placeholder='status' required><br>

    <label for='date'><h3>Start Date</h3></label>
    <input type='text' name='sdate' id='date' placeholder='Start Date' required><br>

    <label for='date1'><h3>End Date</h3></label>
    <input type='text' name='edate' id='date1' placeholder='End Date' required><br>
    <input type='submit' name='input-submit' value='Save'>
  </form>

</div>";
    }
    elseif ($_POST["ch"]=="5") {
      echo "  <div class='welcome'><h2 class='welcome_mssg'> Tickets Updation Form</h2></div>
<div class='input-form-box'>
  <form class='input-form' action='aregister_u.php' method='post'>
    <label for='tid'><h3>Ticket ID</h3></label>
    <input type='text' name='t_id' placeholder='Enter a valid Ticket ID' required><br>

    <label for='status'><h3>Status</h3></label>
    <input type='text' name='sta' placeholder='Enter status of Ticket' required><br>

        <input type='submit' name='input-submit' value='Save'>
  </form>

</div>";
    }



  }
?>



</body>
</html>
