<?php

  $conn = mysqli_connect('localhost', 'root', null, 'comp_1006_midterm');

  // Step 1: Write the proper SQL statement to remove a person from the database
  $sql = "DELETE FROM people
        WHERE id = {$_GET['id']}";
  
  $result = mysqli_query($conn, $sql);

  session_start();
  if ($result) {
    $_SESSION["message"] = "The person was deleted successfully.";
  } else {
    $_SESSION["message"] =  "There was an error updating the record: " . mysqli_error($conn);
  }

  header("Location: notification.php");
  exit();

?>