<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/sql.css">
</head>
<body>
<div class="all-container">
  <div class="container-for-form-craete-database">
    <h1>Databases</h1>
  </div>
  <div class="container-for-create-db">
    <form action="../actionphp/create.php" method="post">
  <div class="cont-for-content-form">
     <div class="cont-name">
       <label for="create"><b>Create Database</b></label>
     </div>
     <div class="cont-input">
       <input type="text" name="dbname" id="" placeholder="Write Data Base name" required> &nbsp;&nbsp;<select class="select1">
          <optgroup value='colletion'>
           <option value="">collation</option>
          </optgroup>
       </select>
      <input type="submit" name="create" value="create" class="button-for-create">
    </div>
  </div>
    </form>
  </div>
  <div class="container-for-db-names">
    <table border="1px" style="border-collapse: collapse;" class="tableone">
      <tr class="trone">
        <th class="th1">select db</th>
        <th class="th2">Data base</th>
        <th class="th3">access contorol</th>
      </tr>
      <?php
     include('../actionphp/create.php');
     //calling fuction
     showdb();
      ?>
    </table>
    <div class="container-for-droper-db">
     select all <input type="checkbox" name="" id="">
    <span class="container-for-drop-links"><a href="" class="droplinks"> Drop database</a></span>
    </div>
  </div>
  <div >
    <?php
    // include'../actionphp/create.php';
    
    
    ?>

  </div>
</div>
</body>
</html>


