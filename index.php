
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/logo2.jpg">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/logo2.jpg">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/hsstyle.css">
	<title>C R M S</title>
  <style>
    
  </style>

</head>

<body>
<div class="navigation-bar">
<img src="Resource/logo2.jpg" alt="logo">

  <?php
    session_start();
    if(isset($_SESSION["userID"]) && $_SESSION["uc"]=="1")
    {
      echo "<a href='logout.php'>Logout</a>
      <a href='pdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
      echo "<a href='logout.php'>Logout</a>
      <a href='ddashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="3") {
      echo "<a href='logout.php'>Logout</a>
      <a href='sdashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    else {
      echo " <div class='dropdown'>
    <button class='dropbtn'> Login <i class='fa fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      
      <a href='user.login.php'>Client Login</a>
      <a href='admin.login.php'>Admin Login</a>

    </div>
  </div>
  <a href='about.php'>About </a>
  <a href='index.php'> Home</a>";
    }
   ?>
</div>

<div class="intro">
 <img src="Resource/bag.jpg">
 <div class="intro_write">
  <h3 class="intro_head"> Clients Record Management System</h3><br>
  <p>-“We're here to help you, every step of the way.”</p>
  </div>
</div>

<div class="footer">
  <a href="#"> <p></p></a>
</div>



</body>
</html>
