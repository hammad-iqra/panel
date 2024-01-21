<?php
include("config.php");
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .navbar {
      height: 100vh;
      width: 250px;
      background-color: #333;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .navbar a {
      padding: 15px 20px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    .navbar a:hover {
      background-color: #555;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .picture{
        border-radius: 50%;
    }
  </style>
</head>
<body>


<div class="navbar">
<img src="/images/userpic.png" alt= width="460" height="345" class="picture">
<a href="#user" ><?php echo $_SESSION['username']?>;</a>
  <a href="#home" class="active">Home</a>
  <a href="logout.php" type="button">logout</a>
  <?php
  if($_SESSION["role_id"] ==0)

  {
  ?>
  <a href="#dashboard">Dashboard</a>
  <a href="fetch.php">Users</a>
<?php  
}

  ?>
</div>



</body>
</html>
