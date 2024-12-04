<?php
include'conform.php';
$userid=$_GET['id'];
$sqlquery=$conn->query("DELETE FROM users WHERE u_id='$userid'");
if ($sqlquery) {
   header('location:../users/index.php');
}
?>