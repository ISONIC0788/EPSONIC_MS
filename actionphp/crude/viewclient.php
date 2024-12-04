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
    <table border="1px" style="border-collapse: collapse;">
        <tr>
            <th>#</th>
            <th>firstname</th>
            <th>lasname</th>
            <th>gender</th>
            <th>telephone</th>
            <th>accno</th>
            <th>action</th>
            <a href=''></a>
        </tr>
       <?php
       $select= "SELECT * FROM `clients`";
       $reg= $conn->query($select);
       while ($rows= mysqli_fetch_array($reg)) {
            $id = $rows[0];
            $first = $rows[1];
            $last = $rows[2];
            $gender = $rows[3];
            $telephone = $rows[4];
            $accno = $rows[5];
            echo"<tr>";
            echo "<td>$id</td>";
            echo "<td>$first</td>";
            echo "<td>$last</td>";
            echo "<td>$gender</td>";
            echo "<td>$telephone</td>";
            echo "<td>$accno</td>";
            echo "<td><a href='delete.php?delec=$id'>delete</a> &nbsp;<a href='update.php?updatec=$id'>update</a></td>";
       }
       ?>

    </table>
</body>
</html>