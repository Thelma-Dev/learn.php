<?php
//connect to the database
$db = mysqli_connect('localhost', 'program', '1234', 'project_todolist');

if (isset($_POST['submit'])) {
  $task = $_POST['task'];

  mysqli_query($db, "INSERT INTO task (task) VALUES ('$task')");
  header('location: class.php');
}
//delete task
if (isset($GET['del_task'])) {
  $task_number = $_GET['del_task'];
  mysqli_query($db, "DELETE FROM task WHERE task_number=".$task_number);
  header('location: class.php');
}
$task = mysqli_query($db, "SELECT * FROM task");
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
 function Opencon()
 {
$dbhost= "localhost";
$dbuser= "program";
$dbpass= "1234";
$db= "project_todolist";

$conn= new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);

return $conn;
 }
 function CloseCon($conn)
 {
   $conn -> close();
 }
 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" onsubmit="Formvalidation()" class= "input_form">
Task Number: <input type="number" name="task_number" class="number input">
<br>
Task: <input type= "text" name= "task" class="task_input"> <br>
<br>
Assignee: <input type= "text" name= "assignee" class="assignee_input"> <br>
<br>
Due Date: <input type="date" name= "due date" class= "date_input"<br>
<br>
<br>
<button type= "submit" id="add_btn" class= "add_btn">Add Task</button>
</form>

<table>
  <thread>
  <tr>
    <th><N</th>
    <th>Task</th>
    <th>Action</th>
  </tr>
</thread>

<tbody>

</tbody>
<?php
$i=1; while ($row = mysqli_fetch_array ($task))
  ?>

  <tr>
  <td><?php echo $i; ?></td>
    <td class="task">

      <?php
      echo $row['task'];
      ?>

    </td>
  <td class="delete">
    <a href="class.php?del_taskform=<?php echo $row['task']; ?>">x</a>
  </td>
  </tr>
<?php $i++; ?>
</tbody>
</table>
  </body>
</html>
