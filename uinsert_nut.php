<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:doctor.login.php");
  }

  if (isset($_POST["input-submit"])) {
  
   $uid=$_SESSION['userID'];
   $pro=$_POST["proteins"];
   $cal=$_POST["calories"];
   

    $sql="INSERT INTO supportticketes (c_id,p_id, description)
       VALUES ( '$uid','$pro', '$cal')";
    $is_inserted=mysqli_query($conn,$sql);
    if($is_inserted){
      header("Location:uinsert.php?login=success");
      exit();}
    else
    {
      header("Location:uinsert.php?error=wronguser");
      exit();
    }
  }
  else {
    header("Location:uinsert.php");
    exit();
  }

 ?>
