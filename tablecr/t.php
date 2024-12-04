'<?php
//  if (isset($_GET['table'])) {
    $tablename=$_GET['tablename'];
    $colums=$_GET['colunsnumber'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/t.css">
</head>
<body>
         <form action="../actionphp/taction.php" method="post" class="form-for-table">    
               <div class="contaner-for-input">
              table name: <input type="text" name="tablename"  id="" class="input-text" value="<?php echo $tablename;?>">&nbsp;&nbsp;columns: <input type="number" name="colnum" id="" class="input-number" value="<?php echo $colums;?>">
                  <input type="submit" value="add" style="margin-left: 20px; width:50px" class="excute-button">
               </div>
    <div class="container-for-table">
        <table border="1px" style="border-collapse: collapse; border:none;" class="table-cont">
            <tr class="trone">
                <td>name</td>
                <td>type</td>
                <td>length/value</td>
                <td>defoult</td>
                <td>null</td>
                <td>index</td>
                <td>a_i</td>
            </tr>
            <?php
     // decration of varieble
    //  $table = array(
    //     array(1,'ebedi','meleki')
    //  );
    //  $data= array();
     
    //  foreach ($table as $data) {
    //     print_r $data;
    //  }
    for ($i=0; $i <$colums ; $i++) { 
                 echo"
               
                 <tr>
                 <td><input type='text' name='columnname' id=''></td>
                 <td>
                     <select name='type' id=''>
                         <option value='INT'>INT</option>
                         <option value='VACHAR'>VACHAR</option>
                         <option value='TEXT'>TEXT</option>
                         <option value='DATE'>DATE</option>
                     <optgroup label='numeric'>
                         <option value='TINY INT'>TINY INT</option>
                         <option value='SMALL INT'>SMALL INT</option>
                         <option value='MEDIUM INT'>MEDIUM INT</option>
                         <option value='INT'>INT</option>
                         <option value='BIG INT'>BIG INT</option>
                         <option value=''>-</option>
                         <option value='DECIMAL'>DECIMAL</option>
                         <option value='FLOAT'>FLOAT</option>
                         <option value='DOUBLE'>DOUBLE</option>
                         <option value='REAL'>REAL</option>
                         <option value='FLOAT'>FLOAT</option>
                         <option value=''>-</option>
                         <option value='BIT'>BIT</option>
                         <option value='BOOLEAN'>BOOLEAN</option>
                         <option value='SERIAL'>SERIAL</option>
                     </optgroup>
                     <optgroup value='' label='date time'>
                       <option value='DATE'>DATE</option>
                       <option value='DATETIME'>DATETIME</option>
                       <option value='TIMESTAMP'>TIMESTAMP</option>
                       <option value='TIME'>TIME</option>
                       <option value='YEAR'>YEAR</option>
                     </optgroup>
                     <optgroup label='string'>
                       <option value='CHAR'>CHAR</option>
                       <option value='VARCHAR'>VARCHAR</option>
                       <option value=''>-</option>
                       <option value='TINYTEXT'>TINYTEXT</option>
                       <option value='TEXT'>TEXT</option>
                       <option value='MEDIUMTEXT'>MEDIUMTEXT</option>
                       <option value='LONGTEXT'>LONGTEXT</option>
                       <option value=''>-</option>
                       <option value='BINARY'>BINARY</option>
                       <option value='VARBINARY'>VARBINARY</option>
                       <option value=''>-</option>
                       <option value='TINY BLOB'>TINY BLOB</option>
                       <option value='MEDIUMBLOB'>MEDIUMBLOB</option>
                       <option value='BLOB'>BLOB</option>
                       <option value='LONGBLOB'>LONGBLOB</option>
                       <option value=''>-</option>
                       <option value='ENUM'>ENUM</option>
                       <option value='SET'>SET</option>
                     </optgroup>
                     </select>
                 </td>
                 <td>
                     <input type='number' name='length' id=''>
                 </td>
                 <td>
                     <select name='defou' id=''>
                         <option value='None'>None</option>
                         <option value=''>As defined:</option>
                         <option value='NULL'>NULL</option>
                         <option value='CURRENT_TIMESTAMP'>CURRENT_TIMESTAMP</option>
                     </select>
                 </td>
                 <td>
                     <input type='checkbox' name='checknull' value='NULL' id=''>
                 </td>
                 <td>
                     <select name='selindex' id=''>
                         <option value=''>---</option>
                         <option value='PRIMATY KEY'>PRIMATY KEY</option>
                         <option value='UNIQUE'>UNIQUE</option>
                         <option value='INDEX'>INDEX</option>
                         <option value='FULLTEXT'>FULLTEXT</option>
                     </select>
                 </td>
                 <td>
                     <input type='checkbox' name='checkautinc' value='AUTO_INCREMENT' id=''>
                 </td>
             </tr>
             
             ";
    }
            ?>
        </table>
     </div>
     <div class="conteiner-for-allsubmit">
       <div class="submit-butoon">
         <input type="submit" name="crttable" value="execute" class="excute-button2">
       </div>
     </div>
         </form>
</body>
</html>
<?php 
// $select = mysqli_select_db(database_name)

 ?>