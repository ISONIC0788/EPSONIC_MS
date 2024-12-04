<?php

$conn= mysqli_connect('localhost','root','','igisabo_sacco');

$id =$_GET['delec'];
$dlt= $conn->query("DELETE FROM clients WHERE cl_id='$id'");
if ($dlt) {
   
        header("location:viewclient.php");
  
}
?>