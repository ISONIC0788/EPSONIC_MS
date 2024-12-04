<?php
function createdb($bd)
{ 
      $servernam='localhost';
      $user='root';
      $password='';
      $conn=new mysqli($servernam,$user,$password);
     //check connection
      if (!$conn) {
        echo'is  not connected';
     }
     //crate database
     if (isset($_POST['create'])) {
        $dbname=$_POST['dbname'];
        $dbcrsql="CREATE DATABASE $dbname";
       if ($conn->query($dbcrsql)==true) {
        echo"
        <script>
        alert('new db is created');
        window.location='../links/tablecr.php';
        </script>";
         }else{
           echo"<script>alert('new db is not created');
           window.location='../links/dbselect.php';
           </script>";
           echo"error".mysqli_error($conn);
          }
       } 

}
createdb(1);
function namedb()
{
  $servernam='localhost';
  $user='root';
  $password='';
  $conn=new mysqli($servernam,$user,$password);
  $sqldbname='SHOW DATABASES';
  $resdbname=mysqli_query($conn,$sqldbname);
  while ($row=mysqli_fetch_assoc($resdbname)) {
  
      echo'<li>'.$row['Database'].'</li>';
  }

}
function showdb()
{
  $servernam='localhost';
      $user='root';
      $password='';
      $conn=new mysqli($servernam,$user,$password);
      $sqldbname='SHOW DATABASES';
      $resdbname=mysqli_query($conn,$sqldbname);
      while ($row=mysqli_fetch_array($resdbname)) {
        //value for inpu check box that wase dec  is //<?php$row=[Database];>?
      
          echo"<tr style='' ><td><input type='checkbox' name='' value='' id=''>
          </td><td><a href='tablecr.php?dbname= $row[Database]'>"
          .$row['Database'].
          "</a> </td><td> <a href='drop'> check privileges</a></td></tr>";  
      }
}

function dropdb()
{
  $dbname=$_GET[''];
  $servernam='localhost';
      $user='root';
      $password='';
      $conn=new mysqli($servernam,$user,$password);
      $sqldrop='DROP DATABASE $dbname';

}
function getdbname()
{
  $servernam='localhost';
  $user='root';
  $password='';
  $conn=new mysqli($servernam,$user,$password);

 if (isset($_POST['create'])) {
    $dbname=$_POST['dbname'];
    echo $dbname;
  

}
}
// function tablecre()
// {
//   if (isset($_GET['table'])) {
//    $tablename=$_GET['tablename'];
//    $colums=$_GET['colunsnumber'];
//    echo$tablename.$colums;
//   //  for ($col=0; $col <=$colums ; $col++) { 

     
//   //  }
//   // header('location:tablecr1.php');
//   }
// }
// tablecre($tablename,$colums);

//for insert database
function userinsert()
{
   $servername='localhost';
   $user='root';
   $password='';
   $dbname='isonic';
  //  $conn=new mysqli($servernam,$user,$password);
  //  $dbselect=mysqli_select_db($conn,'isonic');
  //  if (!$dbselect) { echo'is true seleceted';}
  
 
try {
  $conn =new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
  //
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $stmt=$conn->prepare("INSERT INTO users(u_name,u_pass,u_email,u_date,u_number) VALUES(:u_name,:u_pass,:u_email,:u_date,:u_number)");
  
    $stmt->bindParam(':u_name',$usen);
    $stmt->bindParam(':u_pass',$usep);
    $stmt->bindParam(':u_email',$usee);
    $stmt->bindParam(':u_date',$used);
    $stmt->bindParam(':u_number',$usem);
    $usen='kalisa';
    $usep='kidogo';
    $usee='ebedi@gmail.com';
    $used='2023-04-27';
    $usem='05555565';
    $stmt->execute();
    echo'<br>new recorde are created  ';

  
} catch (PDOException $e) {
         echo'error'.$e->getMessage();
     }
   $conn=null;
}
function dbselect()
{
  $conn=mysqli_connect('localhost','root','');
  if (!$conn) {
    echo"conneted error";
  }else{
    $db=$_GET['dbname'];
    $select=mysqli_select_db($conn,$db);
    $tableselect=$conn->query("SHOW TABLES");
    $result=mysqli_fetch_array($tableselect);
  }
}

function videoinsert()
{
 
  
 


  
}

?>