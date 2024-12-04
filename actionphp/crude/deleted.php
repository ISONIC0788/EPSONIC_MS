<?php
$conn= mysqli_connect('localhost','root','','igisabo_sacco');
$id = $_GET['delec'];
$res= $conn->query(" DELETE FROM debitor WHERE Debt_id ='$id'");
if ($res) {
    echo
    "
    <script>
    window.location ='viewdebtor.php';
</script>
    ";

   
}
?>
