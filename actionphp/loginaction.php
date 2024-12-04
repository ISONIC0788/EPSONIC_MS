<?php
include'conform.php';
session_start();
if (isset($_POST['login'])) {
$u_name=$_POST['usern'];
$u_pass=$_POST['passw'];
$sqli="SELECT * FROM users WHERE u_name='$u_name' AND u_pass='$u_pass'"; 
$res=mysqli_query($conn,$sqli);
$row=mysqli_fetch_array($res);
if (is_array($row)) {
    $_SESSION['u_name']=$row['u_name'];
    $_SESSION['u_pass']=$row['u_pass'];

    echo"<script>
    window.location='../index.php';
</script>";
    
 }else{
  header('location:../login/login.php'); 
    
}

}


?>