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
    <link rel="stylesheet" href="../css/step1.css">
</head>
<body>
    <div class="container-for-all">
        <div class="container-for-form">
            <form action="<?php $_PHP_SELF?>" method="post">
                <div class="container-for-avatar-image">
                    <?php ?>
                    <div class="container-for-image">
                        <img src="../photo/avatar3.png" alt="" srcset="" height='100px' width='100px' class='img' >
                    </div>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Enter your Email </b></label>
                    <input type="email" name="email" id="" class='email' placeholder='please enter email '>
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Enter your name </b></label>
                    <input type="text" name="name" id="" class='text' placeholder='please enter use name'>
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-button">
                    <div class="container-button">
                       <input type="submit" name='send' value="Next" class='submi-button'> 
                    </div>
                </div>
            </form>

          

        </div>
    </div>
</body>
</html>
<div class="cont-for-ll">
  <div class="cont-for-mess">
     <div class="cont-for-org">
<?php

if (isset($_POST['send'])) {
    $useremail=$_POST['email'];
    $username=$_POST['name'];
    if (!empty($useremail && $username)) {
        
        if (!filter_var($useremail,FILTER_VALIDATE_EMAIL)){
            echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>try to write full email adress</div></div>"; } 
            else
            {$_SESSION['u_email']=$useremail;
                if (!preg_match("/^[a-zA-Z ]*$/",$username)){
                echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>try to use character only </div></div>";}
                     else{ $_SESSION['u_name']=$username;
                        echo'all session are seted';
                        header('location:step2.php'); 
                    }     
            }
   }
else{
                //catch error
             function catchsession()
                    {
                   session_unset($_SESSION);
                   if (empty($_SESSION)) {
                    if (session_destroy()) { throw new Exception("<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Message:invalid you value try to input value</div></div>");}     
                      }
                 }
                 try {
                    catchsession();
                    } catch ( Exception $er) {
                            echo"".$er->getMessage(); 
                         } 
       }

}

?>
    </div> 
   </div>
</div>