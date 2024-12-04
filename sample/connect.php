<?php
  $conn = new mysqli('localhost', 'root', '', 'sample');
  if($conn->connect_error){
    die("Fatal Error: Can't connect to database: ". $conn->connect_error);
  }
?>