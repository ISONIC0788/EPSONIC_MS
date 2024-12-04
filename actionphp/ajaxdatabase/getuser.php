<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $q = intval($_GET['q']);
    $con = mysqli_connect('localhost','root','','ajax');
    if (!$con) {
        die(' could not connected'.mysqli_error($con));
        # code...
    }
    $sqli= "SELECT * FROM  user WHERE id = '".$q."'";
    $result = mysqli_query($con,$sqli);
    echo"
    <table>
    <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>age</th>
    <th>hometown</th>
    <th>job</th>
    </tr>
    ";
    while ($rows = mysqli_fetch_array($result)) {
       echo"<tr>";
       echo"<td>".$rows[1]."</td>";
       echo"<td>".$rows[2]."</td>";
       echo"<td>".$rows[3]."</td>";
       echo"<td>".$rows[4]."</td>";
       echo"<td>".$rows[5]."</td>";
       echo"</tr>";
    }
   
    echo "</table>";
    mysqli_close($con);
    ?>
</body>
</html>