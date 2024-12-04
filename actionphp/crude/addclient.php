
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
    <form action="" method="post">
        <h1>add user</h1>
        firstname
        <input type="text" name="fi" id="">
        <br>
        lastname
        <input type="text" name="la" id="">
        <br>
        gender
        <input type="text" name="ge" id="">
        <br>
        telephone
        <input type="tel" name="te" id="">
        <br>
        accaunt no
        
      <input type="number" name="ac" id="">
      <br>
      <input type="submit" name="adddclienc" value="addclient">
        
        <br>
    </form>
</body>
</html>
<?php
if (isset($_POST['adddclienc'])) {
    $first= $_POST['fi'];
    $last= $_POST['la'];
    $gender= $_POST['ge'];
    $telep= $_POST['te'];
    $accn= $_POST['ac'];
    $sqli="INSERT INTO clients (cl_id,FirstName,LastName,Gender,Telephome,Acc_No) VALUES('','$first','$last','$gender','$telep','$accn')";
    $result= mysqli_query($conn,$sqli);
    if ($result) {
       header("location:viewclient.php");
    }

}

?>