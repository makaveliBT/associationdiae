<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $first_name = htmlspecialchars($_POST['first_name']);
  $last_name  = htmlspecialchars($_POST['last_name']);

  echo  $first_name, ' ', $last_name;
?>
