<?php
// include('../actionphp/create.php');
session_start();
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/step1.css">
    <script src="../js/index.js"></script>
</head>
<body>
    <div class="container-for-all">
        <div class="container-for-form">
            <form action="<?php $_PHP_SELF?>" method="post">
                <div class="container-for-avatar-image">
                    <div class="container-for-image">
                        <img src="../photo/avatar3.png" alt="" srcset="" height='100px' width='100px' class='img' >
                    </div>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Enter you New password </b></label>
                    <input type="password" name="firstpss" id="p1" class='numberphone' placeholder='please enter new password to use'>
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Re-Enter your password </b></label>
                    <input type="password" name="secondpass" id="p2" class='date-input' placeholder='please enter re-enter password'>
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-input">
                    <input type="checkbox" name=""  id="" onclick="myshow()">show password
                </div>
                <div class="container-for-button2">
                    <div class="container-for-pervious-button">
                       <input type="submit" name='backto';  value="< back to" class='prev-button'> 
                    </div>
                    <div class="container-button">
                       <input type="submit" name='insert' value="Next" class='submi-button'> 
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
<div class="cont-for-ll">
  <div class="cont-for-mess">
     <div class="cont-for-org">
<?php
if (isset($_POST['backto'])) {
    session_unset($_SESSION['u_gender']&&$_SESSION['u_number']&&$_SESSION['u_date']);
   if (session_destroy()) {
    header('location:index.php');
   }  
}elseif(isset($_POST['insert'])){
    $fstpass=$_POST['firstpss'];
    $secpass=$_POST['secondpass'];
 if (!empty($fstpass&&$secpass)) {
            if ($fstpass===$secpass) {
                //hide password
                echo''.$secpass;
                $passcoll=sha1($fstpass);
                echo '<br>'.$passcoll;
                $_SESSION['u_pass']=$passcoll;
                //valiable of sessetion
                $iusername=$_SESSION['u_name'];
                $iuserpass=$_SESSION['u_pass'];
                $iuseremail=$_SESSION['u_email'];
                $iusernumber=$_SESSION['u_number'];
                $iuserdate=$_SESSION['u_date'];
                $iusergenedr=$_SESSION['u_gender'];
                //fuction connection
                 $servername='localhost';
                 $user='root';
                 $password='';
                 $dbname='isonic';
                 try {
                $conn =new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
              //error message
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $stmt=$conn->prepare("INSERT INTO users(u_name,u_pass,u_email,u_date,u_number,u_gender) VALUES(:u_name,:u_pass,:u_email,:u_date,:u_number,:u_gender)");
                $stmt->bindParam(':u_name',$usen);
                $stmt->bindParam(':u_pass',$usep);
                $stmt->bindParam(':u_email',$usee);
                $stmt->bindParam(':u_date',$used);
                $stmt->bindParam(':u_number',$usem);
                $stmt->bindParam(':u_gender',$ugnd);
                $usen=$iusername;
                $usep=$iuserpass;
                $usee=$iuseremail;
                $used=$iuserdate;
                $usem=$iusernumber;
                $ugnd=$iusergenedr;
                $stmt->execute();
                if ($stmt) {
                    header('location:../login/'); 
                }
                } catch (PDOException $e) {
                 echo'error'.$e->getMessage();
                 }
               $conn=null;

//end fuction
    }else{echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>enter password matches</div></div>";}
 }else{
      function errorinv()
      {
        if (empty($fstpass)||empty($secpass)) { throw new Exception("<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'><b>Message:</b>invalid input password</div></div>");}
       }try {
        errorinv();
       } catch (Exception $e) {echo''.$e->getMessage();}
   }
}
?>
  </div> 
   </div>
</div>
