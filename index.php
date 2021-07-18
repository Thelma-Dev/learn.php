<?php
include('server.php');
include('header.php');

//if user is not logged in they cannot access this page

if(empty($_SESSION['username'])) {
  header('location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Registration</title>
    <link rel= "stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>Home Page</h2>
    </div>

    <div class="content">
      <?php
      if (isset($_SESSION['success'])):  ?>
      <div class="error success">
        <h3>
          <?php
          echo "$_SESSION['success']";
          unset($_SESSION['success']);
           ?>

       </h3>
    </div>

    <?php
if (isset($_SESSION["username"])): ?>

  <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
  <p><a href="index.php?logout=1"style="color:red;">Logout</a></p>


  </body>
</html>

<?php include('sidebar.php'); ?>
