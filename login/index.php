<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/index.js"></script>
</head>
<body>
<div class="cont-cont"> 
 <div class="all-container">
    <div class="form-container">
       <form action="<?php $_PHP_SELF ?>" method="post" class="login-form">
       <div class="container-for-images">
            <img src="../photo/avatar3.png" alt="" srcset="" class="image1" height="100px" width="100px" >
        </div>
         <div class="container-for-input">
             <label for="username"><b>username</b></label>
            <div class="cont-input">
             <input type="text" name="usern" id="">
             <small></small>
            </div>
         </div>
         <div class="container-for-input">
             <label for="username"><b>password</b></label>
             <div class="cont-input">
               <input type="password" name="passw" id="mypass">
               <small></small>
             </div>
         </div>
         <div class="container-for-input">
          <input type="checkbox" name="" id="" onclick="myfuction()"> show password
         <br>
         <br>
             <input type="checkbox" name="checked" value="useradmin" id=""> rember me  join <a href="../home/home.php"> i SONIC company</a>
         </div>
         <div class="container-for-input">
              <input type="submit" name="login" value="login">
         </div>
       </form>
    </div>
</div>


</div>
</body>
</html>
<div class="cont-for-ll">
  <div class="cont-for-mess">
     <div class="cont-for-org">
<?php
//error catch
if(empty($_SESSION)){
function checkdestroyed()
{
if(empty(($_SESSION))) {throw new Exception("<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'><b>Message:</b>&nbsp;you can try to login</div></div> ");}return true;
}
try {checkdestroyed();} 
catch ( Exception $e) {echo$e->getMessage();}
}//check passwor and username
elseif(empty($_SESSION['u_pass'])){ 
    //this code it show error to the user
    // print_r($_SESSION['error']);
 }


include('../actionphp/conform.php');

// session_start();
if (isset($_POST['login'])) {
    //preventetion my sqli injector
$u_name= stripcslashes($_POST['usern']);
$u_pass= stripcslashes($_POST['passw']);
$u_name= mysqli_real_escape_string($conn,$u_name);
$u_pass= mysqli_real_escape_string($conn,$u_pass);
$up=sha1($u_pass);
$sqli="SELECT * FROM users WHERE u_name='$u_name' AND u_pass='$up'"; 
$res=mysqli_query($conn,$sqli);
$row=mysqli_fetch_array($res);
if ($u_name===$row['u_name']){
    if ($up===$row['u_pass']) {
        if (is_array($row)) {
                   $_SESSION['u_name']=$row['u_name'];
                   $_SESSION['u_pass']=$row['u_pass'];
               
               echo"<script>window.location='../index.php';</script>";
                 
            }else{
             header('location:index.php');
             session_unset(($_SESSION['u_name'])&&($_SESSION['u_pass']));
             $msg="<br><div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Invalid username or password</div></div><br>";
             $_SESSION['error']=$msg;    
           }
   }else{echo"<br><div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Invalid password Try other</div></div><br>";}
    
}else{echo "<br><div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Your are unregister now <a href='../createacc/' class='cleckhere' >click here</a></div></div><br> ";}
  }


?>
    </div> 
   </div>
</div>


