<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:doctor.login.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Resource/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Resource/logo.png">
    <link rel="manifest" href="Resource/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="css/drecords_style.css">

<style>
	
  </style>

    <title>Records</title>
  </head>
  <body >


    <div class="top_img"><img src="Resource/logo12.jpg"></div>
    <div class="navigation-bar" style="text-align: center">
      <a href="udashboard.php" >Home</a>
      <a href="urecords.php">Records </a>
      <!--<a href="dsearch.php">Search</a>-->
      <a href="uinsert.php">Client Support</a>
      <a class='logout' href="logout.php">Logout</a>
    </div>

    <?php
      require "connection.php";

      $U_id=$_SESSION["userID"];

       # Activity
    $sql = "SELECT * FROM services";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div class='welcome'><h2 class='mssg'> Services List </h2></div>
            <div class='table_box'>
                <table class='content-table'>
                    <thead>
                        <tr>
                            <th>Service ID</th>
                            <th>Service Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            $serviceId = $row["service_id"];
            $Name = $row["name"];
            $description = $row["description"];
            $Price=$row["price"];
            

            echo "
                <tr>
                    <td>$serviceId</td>
                    <td>$Name</td>
                    <td>$description</td>
                    <td>$Price</td>
                    <!-- Add other columns as needed -->
                </tr>";
        }

        echo "</tbody></table></div>";
    } else {
        echo "<div class='welcome'><h2 class='mssg'> No services Records Found </h2></div>";
    }
   
     #user
     $sql = "SELECT * FROM contracts  WHERE c_id = '$U_id'";
     $result = mysqli_query($conn, $sql);
 
     if ($result) {
         echo "<div class='welcome'><h2 class='mssg'> Client Contract Details </h2></div>
             <div class='table_box'>
                 <table class='content-table'>
                     <thead>
                         <tr>
                             <th>Client ID</th>
                             <th> Contract ID</th>
                             <th>Service ID</th>
                             <th>Start Date</th>
                             <th>End Date</th>
                             
                         </tr>
                     </thead>
                     <tbody>";
 
         while ($row = mysqli_fetch_assoc($result)) {
             $userId = $row["c_id"];
             $contract = $row["contract_id"];
             $service = $row["service_id"];
             $sdate = $row["start_date"];
             $edate = $row["end_date"];
             
             echo "
                 <tr>
                     <td>$userId</td>
                     <td>$contract</td>
                     <td>$service</td>
                     <td>$sdate</td>
                     <td>$edate</td>
                    
                 </tr>";
         }
 
         echo "</tbody></table></div>";
     } else {
         echo "<div class='welcome'><h2 class='mssg'> No Contract  Records Found </h2></div>";
     }

     
      #workout


      $sql = "SELECT * FROM projects WHERE c_id = '$U_id' ";
      $result = mysqli_query($conn, $sql);
  
      if ($result) {
          echo "<div class='welcome'><h2 class='mssg'> Client Project Records </h2></div>
              <div class='table_box'>
                  <table class='content-table'>
                      <thead>
                          <tr>
                              <th>Client ID</th>
                              <th>Project ID</th>
                              <th>Project Name</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Status</th>
                              
                          </tr>
                      </thead>
                      <tbody>";
  
          while ($row = mysqli_fetch_assoc($result)) {
              $userId = $row["c_id"];
              $pid = $row["p_id"];
              $pname = $row["p_name"];
              $ssdate= $row["start_date"];
              $eedate= $row["end_date"];
              $ss= $row["status"];
              
              echo "
                  <tr>
                      <td>$userId</td>
                      <td>$pid</td>
                      <td>$pname</td>
                      <td>$ssdate</td>
                      <td>$eedate</td>
                      <td>$ss</td>
                     
                  </tr>";
          }
  
          echo "</tbody></table></div>";
      } else {
          echo "<div class='Welcome'><h2 class='mssg'> No Activity Records Found </h2></div>";
      }
      #payment
      $sql = "SELECT * FROM  supportticketes WHERE c_id = '$U_id'" ;
      $result = mysqli_query($conn, $sql);
  
      if ($result) {
          echo "<div class='Welcome'><h2 class='mssg'> Client Support Ticket Records </h2></div>
              <div class='table_box'>
                  <table class='content-table'>
                      <thead>
                          <tr>
                              <th>Ticket ID</th>
                              <th>Client ID</th>
                              <th>Project ID</th>
                              <th>Description</th>
                              <th>Status</th>
                              
                          </tr>
                      </thead>
                      <tbody>";
  
          while ($row = mysqli_fetch_assoc($result)) {
              $TId = $row["ticket_id"];
              $cid = $row["c_id"];
              $id = $row["p_id"];
              $met= $row["description"];
             $cash=$row["status"];
              
              echo "
                  <tr>
                      <td>$TId</td>
                      <td>$cid</td>
                      <td>$id</td>
                      <td>$met</td>
                      <td>$cash</td>
                     
                  </tr>";
          }
  
          echo "</tbody></table></div>";
      } else {
          echo "<div class='welcome'><h2 class='mssg'> No Activity Records Found </h2></div>";
      }
       




    ?>

  </body>
</html>
