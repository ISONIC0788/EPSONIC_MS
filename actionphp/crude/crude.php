<?php
$conn= mysqli_connect('localhost','root','','igisabo_sacco');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul style="display:flex; justify-content:space-between; list-style:none">
            <li><a href="">view</a></li>
            <li><a href="">add debetor</a></li>
            <li><a href="">add client</a></li>
            <li><a href="">view debetor</a></li>
            <li><a href="">view client</a></li>
        </ul>
    </div>
    <form action="" method="post">
        <h3>add user</h3>
        username
        <input type="text" name="user" id="">
        <br>
        password
        <input type="text" name="pass" id="">
        <br>
        <br>
        <input type="submit" name='send' value="add user">
        
    </form>
    
</body>
</html>
<?php
if (isset($_POST['send'])) {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $insert = mysqli_query($conn,"INSERT INTO admin(Admin_id,username,password) VALUES('','$username','$password')");
    if ($insert) {
        echo'have inserted';
    }
    
}



?>