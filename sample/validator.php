Creating Credentials Validator
After that we will now create the validator, this script will check if the accounts of the user is existing in the database. Save the file as validator.php

<?php
  require_once 'connect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $stmt = $conn->prepare("SELECT * FROM `user` WHERE username = '$username' && `password` = '$password'") or die(mysqli_error());
  if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
    echo "Success";
  }else{
    echo "Error";
  }
?>