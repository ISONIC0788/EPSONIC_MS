CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;
 
INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');
//
<?php
  $conn = new mysqli('localhost', 'root', '', 'sample');
  if($conn->connect_error){
    die("Fatal Error: Can't connect to database: ". $conn->connect_error);
  }
?>
<!DOCTYPE html>
<?php
    require 'connect.php';
?>
<html lang = "eng">
    <head>
        <meta charset = "UTF-8" />
        <style>
            #content{
                background-color: #ffeecc;
                width:280px;
                height:110px;
                margin: 100px auto;
                padding:10px;
                border-radius:2px;
                -webkit-box-shadow:0px 0px 30px 3px #000;
            }
        </style>
    </head>
<body>
    <center><h2>Creating a Simple Login using Ajax/MySQLi Prepared Statement</h2></center>
    <div id = "content">    
        <form method = "POST">
            <table> 
                <tr>
                    <td><label>Username:</label></td>
                    <td><input type = "text" id = "username"></td>
                </tr>   
                <tr>    
                    <td><label>Password:</label></td>
                    <td><input type = "password" id =  "password"></td>
                </tr>
                <tr>
                    <td colspan = "2"><br /></td>
                </tr>
                <tr>
                    <td colspan = "2"><button type = "button" style = "width:100%;" id = "login">Login</button></td>
                </tr>
                <tr>
                    <td colspan = "2"><div id = "result"></div></td>
                </tr>
            </table>
        </form>
    </div>
</body> 
<script src = "jquery-3.1.1.js"></script>
<script src = "login.js"></script>
</html>
jQuery Script
Next, we will now create the jQuery function, just copy the code below and name it "login.js".
<script>

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
Creating a Simple Home Page
Next, we will now create the home page, just copy the code below"home.php"

<!DOCTYPE html>
<html lang = "eng">
  <head>
    <style>
      #content{
    background-color: #ffeecc;
    width:280px;
    height:110px;
    margin: 100px auto;
    padding:10px;
    border-radius:2px;
    -webkit-box-shadow:0px 0px 30px 3px #000;
      }
    </style>
  </head>
<body>
  <div id = "content">  
    <center><h2>Welcome!</h2></center>
    <center><a href = "index.php" style = "text-decoration:none;">Back</a></center>
  </div>
</body> 
</html>
Demo/h3>
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
$(document).ready(function(){
$error = $('<center><label style = "color:#ff0000;">Invalid username or password</label></center>');
$error2 = $('<center><label style = "color:#ff0000;">User not found!</label></center>');
$success = $('<center><label style = "color:#00ff00;">Successfully login!</label></center>');
$loading = $('<center><img src = "loading.gif" height = "5px" width = "100%"/></center>');
  $('#login').on('click', function(){
    $error.remove();
    $error2.remove();
    $username = $('#username').val();
    $password = $('#password').val();
    if($username == "" && $password == ""){
      $error.appendTo('#result');
    }else{
      $loading.appendTo('#result');
      setTimeout(function(){
      $loading.remove();
      $.post('validator.php', {username: $username, password: $password},
        function(result){
        if(result == "Success"){
          $('#username').val('');
          $('#password').val('');
          $success.appendTo('#result');
          setTimeout(function(){
            $success.remove();
              window.location = 'home.php';
           }, 1000);
              }else{
            $('#username').val('');
            $('#password').val('');
            $error2.appendTo('#result');
          }
            }
          ) 
        }, 3000);   
          }
      });
});
</script>
