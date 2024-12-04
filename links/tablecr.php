<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <?php
if (!empty($_GET['dbname'])) {
    $dbname =$_GET['dbname'];
    echo"db name".$dbname;
    $connselected= mysqli_connect('localhost','root','');
    if ($connselected) {
        // $sqlchoose=mysqli_select_db($connselected,$dbname);
        // if ($sqlchoose) {
        //    echo "true is ";
        // }else
        // {
        //     echo"is not true";
        // }
    }else
    {
        echo"not connected";
    }

}else{
    echo"try to select database name";
}
   


   
  
    ?>
    <div class="container-for-div-table-create">
        <table border="1px" style="border-collapse: collapse; border:none;" class="table-cont">
            <tr class="trone">
                <td>table</td>
                <td style="width: 300px;" >action</td>
                <td>rows</td>
                <td>type</td>
                <td>collation</td>
                <td>size</td>
                <td>overhead</td>
            </tr>
            <tr>
                <td class="td1">
                   <input type="checkbox" name="" id="">table 1 
                </td>
                <td class="td1">
                    <table>
                    <tr class="ul-cont">
                        <td><a href="#">browse</a></td>
                        <td><a href="#">structure</a></td>
                        <td><a href="#">search</a></td>
                        <td><a href="#">insert</a></td>
                        <td><a href="#">empty</a></td>
                        <td><a href="#">drop</a></td>
                    </tr>
                    </table>
                </td>
                <td class="td1">3</td>
                <td class="td1">myisam</td>
                <td class="td1">latin1_general</td>
                <td class="td1">2.2kb</td>
                <td class="td1">288</td>
            </tr>
        </table>
        <div class="container-for-checked-table">
            <input type="checkbox" name="" id="">check all/ <a href="">table above</a>
            <select name="" id="">
                 <option value="">with selected</option>
                 <option value="" >export</option>
                 <option value="">print view</option>
                 <option value="empty">empty</option>
                 <option value="">drop</option> 
                 <option value="">check table</option> 
                 <option value="">optiize table</option>
                 <option value="">repaire table</option>
                 <option value="">analyze table</option>
                 <option value="">addprefix table</option>
                 <option value="">replace table prefix</option>
                 <option value="">copy table with prefix</option>
            </select>
        </div>
        <hr>
        <div class="containerfor-table-creation">
          <div class="container-print-datadictionar">
          <a href="#">print view</a> <a href="#">data dictionary</a>
          </div>
          <fieldset>
              <legend>create table</legend>
              <form action="../tablecr/t.php" method="get" class="form-for-table">
               <div class="contaner-for-input">
               name: <input type="text" name="tablename" id="" class="input-text" required>&nbsp;&nbsp; number of columns: <input type="number" name="colunsnumber" id="" class="input-number" required>
               </div>
               <div class="container-for-input-sub">
               <a href="../tablecr/t.php"><input type="submit" name="table" value="execute"></a>
               </div>
              </form>
          </fieldset>
        </div>
    </div>
</body>
</html>