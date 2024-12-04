<?php

$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'isonic');
if (!($conn and $db)) {
   echo'is not done'.mysqli_connect_error($conn);
}

?>