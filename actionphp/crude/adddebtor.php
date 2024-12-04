<?php
$conn= mysqli_connect('localhost','root','','igisabo_sacco');
$select= mysqli_query($conn,"SELECT * FROM `admin` ");
$slecttwo = mysqli_query($conn,"SELECT * FROM `clients`");

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
        <h1> add deptor</h1>
        cleint id 
        
        <select name='clent' id=''>
        
        <?php
          while ($row= mysqli_fetch_array($slecttwo)) {
            echo"<option value='$row[0]'>$row[0]</option>";
          }
        ?>
      
        </select>
        <br>
        amaout debotor
        <input type="text" name="amaunt" id="">
        <br>
        date
        <input type="date" name="date" id="">
        <br>
        admin id
        <select name='admin' id=''>
        <?php
        while ($rows= mysqli_fetch_array($select)) {
           echo"
           
           <option value='$rows[0]'>$rows[0]</option>
      ";
        }
       
       
         
         ?>
          </select>
        <br>
        <input type="submit" name="adddebtor" value=" add debtor">
    </form>
    
</body>
</html>
<?php

if (isset($_POST['adddebtor'])) {
  $clid=$_POST['clent'];
  $amount = $_POST['amaunt'];
  $date = $_POST['date'];
  $dminid = $_POST['admin'];
  $sqli="INSERT INTO `debitor`(`Debt_id`, `cl_id`, `Amount_debited`, `Date`, `Admin_id`) VALUES ('','$clid','$amount','$date','$dminid')";
  $res=$conn->query($sqli);
  if ($res) {
    header("location:viewdebtor.php");
  }
  
}

?>