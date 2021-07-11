<?php
include 'class.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);
 ?>


//adding a task

<?php if (isset($_POST['submit'])){
  require "class.php";
  $task = $_POST['task'];

  if (empty($task)){
    header("location: ../class.php?mess=error");
  }
    else {
      $stmt = $conn->prepare("INSERT INTO task(task) VALUE(?)");
      $res = $stmt->execute([$task]);

      if ($res) {
        header("location: ../class'php?mess=success");
      }else{
        header("location: ../class.php?mess=error");
      }
    }
  }

 ?>
