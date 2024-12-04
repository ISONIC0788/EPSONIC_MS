<?php
session_start();
// print_r($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/step1.css">
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
                    <label for=""><b>Enter you phone N<sup><u>o</u></sup>  </b></label>
                    <input type="number" name="number" id="" class='numberphone' placeholder='please enter 10 digit' >
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Enter your Date of birth </b></label>
                    <input type="date" name="date" id="" class='date-input'>
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-input">
                    <label for=""><b>Select your gender </b></label>
                    <input type="radio" name="gender" value='male' id="">Male <input type="radio" name="gender" value='female' id=""> Female
                    <small class='errormsg'></small>
                </div>
                <div class="container-for-button2">
                    <div class="container-for-pervious-button">
                       <input type="submit" name='backto' value="< back to" class='prev-button'> 
                    </div>
                    <div class="container-button">
                       <input type="submit" name='send' value="Next" class='submi-button'> 
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
        session_unset();
       if (session_destroy()) {
        header('location:index.php');
       }  
   }elseif(isset($_POST['send'])){
           $number=$_POST['number'];
           $date=$_POST['date'];
           $gnd=filter_input(INPUT_POST,'gender',FILTER_SANITIZE_STRING);
           if($gnd){
            $gender=$_POST['gender'];
              }
          if (!empty($number)) 
             {
                 if(!preg_match('/^[0-9]*$/',$number)){echo" <div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Try To Enter Number</div></div>";}
                  else
                  {
                  if(strlen($number)<10){ echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Try To Enter 10 digit</div></div> ";}elseif(strlen($number)>10){echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Number you Entered is to large</div></div>";}
                     else
                       {$_SESSION['u_number']=$number;
                        if (!empty($date))
                          {$_SESSION['u_date']=$date;
                              if (!empty($gender)) {
                                  $_SESSION['u_gender']=$gender;
                                  header("location:step3.php");
                              } else{echo" <div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Try select your gender</div></div> ";}
                          }else{echo"<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'>Try To Enter Select date</div></div>";}
                       }
                  }
             }else
             {
                 function errorctch()
                 {if (empty($number)||empty($date)||empty($gender)) 
                     { throw new Exception("<div class='cont-mess'> <div class='circle'><span>!</span></div><div class='msg'><b>Message:</b>Invalid Value  Try to complite that filled!!</div></div>");}
                 }
                     try {errorctch();} catch (Exception $th) {
                     echo ''.$th->getMessage();
                    }

             }
  
      }
?>
  </div> 
   </div>
</div>