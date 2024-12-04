
<?php
$conn= mysqli_connect('localhost','root','','igisabo_sacco');
$id = $_GET['updatec'];
$select=$conn->query("SELECT  * FROM clients WHERE cl_id='$id'");
$rows= mysqli_fetch_array($select);
    // $id = $rows[0];
    $first = $rows[1];
    $last = $rows[2];
    $gender = $rows[3];
    $telephone = $rows[4];
    $accno = $rows[5];
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
        <input type="text" name="fi" value="<?php echo $rows[1]?>" id="">
        <br>
        lastname
        <input type="text" name="la" value="<?php echo $rows[2]?>" id="">
        <br>
        gender
        <input type="text" name="ge" value="<?php echo $rows[3]?>" id="">
        <br>
        telephone
        <input type="tel" name="te" value="<?php echo $rows[4]?>" id="">
        <br>
        accaunt no
        
      <input type="number" name="ac" value="<?php echo $rows[5]?>" id="">
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
    // $sqli="UPDATE  clients SET FirstName='$first', LastName='$last', Gender ='$gender' ,Telephome ='$telep' Acc_No ='$accn' WHERE cl_id ='$id'  ";
    $result= mysqli_query($conn,"
    UPDATE `clients` SET `cl_id`='',`FirstName`='$first',`LastName`='$last',`Gender`='$gender',`Telephome`='$telep',`Acc_No`='$accn' WHERE `cl_id`='$id'
    ");
    if ($result) {
       header("location:viewclient.php");
    }

}

?>