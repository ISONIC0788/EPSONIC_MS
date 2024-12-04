
<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<?php
echo"<br>";
echo "&copy;2000-".date("Y");
echo "the times is ".date("h:i:sa");
echo"<br>";
echo disk_free_space("C:");
echo"<br>";
echo disk_free_space("F:");
echo"<br>";
echo disk_total_space("C:");
echo"<br>";
echo"<div>the date of to day is ".date('Y/m/d')."the day is ".date('l')."<br>the hour".date("h:i:sa")."</div>";
?>

</body>
</html>