<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/uploading.css">
    <link rel="stylesheet" href="../css/uploading2.css">
</head>
<body>
    <div class="container-for-uploading-video">
        <div class="form-container" >
            <form action="<?php $_PHP_SELF?>" method="post" class="form1"   enctype="multipart/form-data">
                <div class="container-for-uploading">
                <div class="container-for-name">
                       <div class="container-photo-user">  
                       </div>
                   </div>
                  <div class="container-for-header">
                  <h1>uploading your photo here</h1>
                  </div>
                  <div class="container-for-header">
                  </div>
                  <div class="container-for-input">
                      <div class="container-for-org">
                      <input type="file" name="file" id=""><input type="text" name="descp" id="" placeholder="Type description photo" required ><input type="submit" value="upload" name="upload" >
                      </div>
                  </div>
                  <div class="container-for-links">
                      <ul>
                          <li> <a href="seephoto/">view uploade photo</a></li>
                          <li><a href="">home</a></li>
                          <li><a href="">open chat dbs</a></li>
                      </ul>
                     
                  </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


<?php
if (isset($_POST['upload'])) {
    $desc=$_POST['descp'];
    $file=$_FILES['file'];
    $file_name=$_FILES['file']['name'];
    $file_size=$_FILES['file']['size'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['type'];
    $dateuploaded=date("Y/m/d");
    $uploadedtime=date("h:i:sa");
   
    // echo $file;
    // $file_extetion=strtolower(end(explode('.',$_FILES['file']['name'])));
    $extention= array("jpeg","jpg","png","gif","mp4","avi","mov");
   if (!empty($file_name)) 
   {
       if (is_array($file)) {
        move_uploaded_file($file_tmp,"photo/".$file_name);
        // insert stat ment usin bind param 
        $servername='localhost';
        $user='root';
        $password='';
        $dbname='isonic';
        try
        {
          $connect = new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
          $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $stmet=$connect->prepare("INSERT INTO userphot(photo,desc_photo,up_date,up_time) VALUES(:photo,:desc_photo,:up_date,:up_time)");
        //   $stmt=$conn->prepare("INSERT INTO users(u_name,u_pass,u_email,u_date,u_number,u_gender) VALUES(:u_name,:u_pass,:u_email,:u_date,:u_number,:u_gender)");

          $stmet->bindParam(':photo',$filename);
          $stmet->bindParam(':desc_photo',$desccomment);
          $stmet->bindParam(':up_date',$uplo_date);
          $stmet->bindParam(':up_time',$uplo_time);
          $uplo_time= $uploadedtime;
          $uplo_date=$dateuploaded;
          $filename=$file_name;
          $desccomment=$desc;
          $stmet->execute();
        
        }catch (PDOException $e) {
          echo'error'.$e->getMessage();
           }
           $connect=null;
      }
        echo"<div class='cont-message-error'><span>success you are uploading file</span></div>";

       }
    else

   {
       print_r("<div class='container-for-succes'><span>you are not uploaded</span></div>");
   }
  
    
}


?>