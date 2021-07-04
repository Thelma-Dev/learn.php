 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     if(isset($_POST['register'])) {
       //the POST form has been submitted
       echo "welcome". $_POST['Username'];
   }
     if(isset($_POST['login'])) {
   // the POST form has been submitted
   echo "Username". $_POST['username']. 'login was successful';
 }
    ?>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" onsubmit="Formvalidation()">
     Username: <input type="text" name= "Username"><br>
     <br>
     E-mail: <input type= "text" name= "email"><br>
     <br>
     Password: <input type= "text" name="Password">
     <br>
     <br>
     <input type="button" name="register" value="register" class="button">
     <input type="button" name="login" value="login" class="button">
   </form>
   </body>
 </html>

<?php
function pre_r($array){
  echo '<pre>';
}
 ?>
