<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:admin.login.php");
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
    <link rel="stylesheet" type="text/css" href="css/aregister_style.css">
    <link rel="stylesheet" type="text/css" href="css/psearch_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" />

  
  </style>

    <title>Records</title>
  </head>
  <body >


   <div class="top_img"><img src="Resource/logo3.jpg"></div>
   <div class="navigation-bar" style="text-align: center">
   <a href="arecords.php" >Records</a>
   <!--<a href="asearch.php" >Search </a>-->
    <a href="aregister.php">Register</a>
    <a href="adelete.php">Delete</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>
  <?php
   
    require "connection.php";

    $uid = $_SESSION["userID"];
    
    
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
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div class='welcome'><h2 class='mssg'> Clients Records </h2></div>
            <div class='table_box'>
                <table class='content-table'>
                    <thead>
                        <tr>
                            <th>Clients ID</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Phone NO</th>
                            <th>Address</th>
                            <th> Register Date </th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            $userId = $row["client_id"];
            $Name = $row["name"];
            $gmail = $row["email"];
            $phone = $row["phone"];
            $address = $row["address"];
            $dob = $row["reg_date"];

            echo "
                <tr>
                    <td>$userId</td>
                    <td>$Name</td>
                    <td>$gmail</td>
                    <td>$phone</td>
                    <td>$address</td>
                    <td>$dob</td>
                    <!-- Add other columns as needed -->
                </tr>";
        }

        echo "</tbody></table></div>";
    } else {
        echo "<div class='welcome'><h2 class='mssg'> No Clients Records Found </h2></div>";
    }

?>
  <div class='welcome'><h2 class='welcome_mssg'> Enter Client ID</h2></div>
  <div class="form_form_box">
    <div class="form">
    <form class="search-form" action="arecords.php" method="post">
      <label for="did"><span class="content-name">Client ID</span></label>
      <input type="text" name="did" placeholder="Enter Client ID"><br>
      <input type="submit" name="search-submit" value="Search">
    </form>
  </div>
  </div>


    <?php
    if(isset($_POST["search-submit"])){
        $U_id=$_POST["did"];
    require "connection.php";

    $uid = $_SESSION["userID"];
    
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
     #attends
     
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
         echo "<div class='welcome'><h2 class='mssg'> No Activity Records Found </h2></div>";
     }
     #payment
     $sql = "SELECT * FROM  supportticketes WHERE c_id = '$U_id'" ;
     $result = mysqli_query($conn, $sql);
 
     if ($result) {
         echo "<div class='welcome'><h2 class='mssg'> Client Support Tickets Records </h2></div>
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
     

    }
 
 
    
    
    ?>
</body>

</html>