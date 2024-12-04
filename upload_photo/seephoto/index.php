<?php
$conneted= mysqli_connect("localhost","root","","isonic");
if ($conneted) {
//    echo "is connected";
}else
{
    echo "is not conneted";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/photo1.css">
   <link rel="stylesheet" href="../../css/usephoto.css">
</head>
<body>
  <div class="container-for-header">
    <div class="container">
    <h1>Uploaded Image </h1>
    </div>
      <div class="container-for-link">
        <ul>
          <li><a href="" class="linkhome">Home</a></li>
          <li><a href="../">Uploading</a></li>
          <li><a href="../../users/">View User </a></li>
          <li><a href="">Abaut Us</a></li>
        </ul> 
       </div>
  </div>
  <div class="container-for-table">
    <div class="container-for-search-photo">
      <form action="" method="post" class='cont-form'>
        <div class="container-for-input">
        <input type="text" name="datato" id=""><input type="submit"  name="search" value="search">
        </div>
      </form>
    </div>
    <div class="container-all-div">
        <?php
        if (isset($_POST['search'])) {
          $namesearch=$_POST['datato'];
          $select="SELECT * FROM `userphot` WHERE desc_photo LIKE '%$namesearch%'";
          $searched=$conneted->query($select);
          if ($searched) {
            while ($photo=mysqli_fetch_array($searched)) {
              ?>
              <div class="container-for-all">

             
               
               <div class="container-for-image">
               <img src="../photo/<?php echo$photo[1]?>" alt="" srcset="" class="imageorg"> 
               </div>
               <div class="container-for-descone">
                 <?php
             
              echo "<p class='descpragaph-one'><b>Description of image</b></p>";
              echo"<hr>";
              echo "<p><b>Infromation:</b></p>".$photo[2];
              echo"<p><b>Date uploaded:</b></p>".$photo[4];
              echo"<p><b>time uploaded:</b></p>".$photo[5];
              echo"<div class='cont-button'><a href='deletep?idp=$photo[0]'><button class='button delet1'>delete</button></a><a href=''><button class='button update1'>update</button></a></div>";
              
              echo"</div>" ;
              echo"</div>";
            }
          }else
          {
           die(mysqli_error($conneted));
           echo"no result found";
          }
         
          
        }else{
          
        
             $sqlselect=$conneted->query("SELECT * FROM `userphot`");
             if ($sqlselect) {
                   while ($result=mysqli_fetch_array($sqlselect)) {                
        ?>
             <div class="container-for-all-personar-inf">
                <div class="container-for-image">
                 <img src="../photo/<?php echo $result['1']?>" alt="" srcset="" class="imageorg"> 
                 </div>
                 <div class="container-for-desc-info">
                   <?php
                   echo "<p class='descpragaph'><b>Description of image</b></p>";
                   echo"<hr>";
                   echo "<p><b>Infromation:</b></p>".$result[2];
                   echo"<p><b>Date uploaded:</b></p>".$result[4];
                   echo"<p><b>time uploaded:</b></p>".$result[5];
                   echo"<div class='cont-button'><a href='deletep?idp=$result[0]'><button class='button delet1'>delete</button></a><a href=''><button class='button update1'>update</button></a></div>";
                   ?>
                 </div>
             </div>
            <?php
            }
            }
            ?>
           
        </div>
  </div>   
</body>
</html>
<?php
}
// $sqlistm="SELECT * FROM `userphot` WHERE desc_photo LIKE '%m%';";
//SELECT * FROM `userphot` WHERE desc_photo LIKE'%$namesearch%' or up_date LIKE '%$namesearch%' or up_time LIKE '%$namesearch%'
?>