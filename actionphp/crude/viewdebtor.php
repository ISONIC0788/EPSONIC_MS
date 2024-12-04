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
            <th>cl_id</th>
            <th>amont debtor</th>
            <th>date</th>
            <th>adminid</th>
            <th>action</th>
        </tr>
       <?php
       $select= "SELECT * FROM `debitor`";
       $reg= $conn->query($select);
       while ($rows= mysqli_fetch_array($reg)) {
            $id = $rows[0];
            $clid = $rows[1];
            $amont = $rows[2];
            $date = $rows[3];
            $amdin = $rows[4];
          
            echo"<tr>";
            echo "<td>$id</td>";
            echo "<td>$clid</td>";
            echo "<td>$amont</td>";
            echo "<td>$date</td>";
            echo "<td>$amdin</td>";
            echo "<td><a href='deleted.php?delec=$id'>delete</a> &nbsp;<a href='updated.php?updatec=$id'>update</a></td>";
       }
       ?>

    </table>
</body>
</html>