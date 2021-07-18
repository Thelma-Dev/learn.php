<?php
include('registration.php');

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

$username = "";
$email = "";
$errors = array();

//connect to database
$db = mysqli_connect('localhost', 'users', '1234', 'registration');

//if the register button is clicked
if (isset($_POST['register'])) {
  $username = mysql_real_escape_string($_POST['username']);
  $email = mysql_real_escape_string($_POST['email']);
  $password_1 = mysql_real_escape_string($_POST['password_1']);
  $password_2 = mysql_real_escape_string($_POST['password_2']);

  //ensure that form fields are filled properly
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
 if ($password_1 != $password_2) {
  array_push($errors, "The passwords do not match");
}

//if there are no errors, save user to database
$password = md5($password_1); //encrypt password before storing in database (security)
if (count($errors) == 0) {
  $sql = "INSERT INTO users (username, email, password)
               VALUES ('$username', '$email', '$password')";
  mysqli_query($db, $sql);

}

}

//log user in from the login page
if (isset($_POST['login'])) {
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);

  //ensure that form fields are filled properly
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

if (count($errors) == 0) {
  $password = md5($password); //encrypt password before comparing with that from database
  $query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) == 1) {
    // log user in
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php'); //redirect to home page
  }else{
    array_push($errors, "wrong username/password combination");

  }
}

}


//Logout
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

 ?>
