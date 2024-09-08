<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="Resource/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Resource/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Resource/logo.png">
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/about_style.css">
	<title> About </title>
  <style>
    .wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Adjust the height as needed */
  background-image: url('your-background-image.jpg'); /* Replace with your background image URL */
  background-size: cover;
  background-position: center;
}

.container {
  backdrop-filter: blur(1px); /* Adjust the blur intensity as needed */
  background-color: rgba(255, 255, 255, 0.4); /* Adjust the alpha value for transparency */
  padding: 20px;
  width: 800px; /* Adjust the maximum width as needed */
  
  text-align: center;
}

.container h1 {
  text-align: center;
  top: 100px;
  color: #333; /* Adjust the text color as needed */
  font-size: 24px; /* Adjust the font size as needed */
  margin: 0;
}




</style>

</head>

<body style="background-image: url(Resource/bag.jpg); background-size: cover;">
<div class="navigation-bar">
 <img src="Resource/logo2.jpg" alt="logo">
  <?php
    session_start();
    if(isset($_SESSION["userID"]) && $_SESSION["uc"]=="1")
    {
      echo "<a href='logout.php'>Logout</a>
      <a href='udashboard.php'>Profile </a>
      <a href='index.php'> Home</a>";
    }
    elseif (isset($_SESSION["userID"]) && $_SESSION["uc"]=="2") {
      echo "<a href='logout.php'>Logout</a>
      <a href='uregister.php'>Profile </a>
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

  <div class="container">
    <h1>Our Client Management System (CMS) is a user-friendly solution designed to streamline client interactions. Admins can manage user accounts, and the system maintains a centralized database for client details. Efficient contract and project management, service definition, and a support ticket system enhance overall productivity. User authentication ensures data security. Built on MySQL, our CMS prioritizes reliability, providing businesses with a seamless and organized approach to client management.</h1>
  </div>




</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>  
</body>
</html>