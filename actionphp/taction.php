<?php
if (isset($_POST['crttable'])) {
    $column=$_POST['colnum'];

for ($i=0; $i <$column ; $i++) 
{ 
    

$column=$_POST['colnum'];
echo'the column: &nbsp;'.$column.'<br>';
$columname=$_POST['columnname'];
echo'coluname: &nbsp;'.$columname.'<br>';
$defoult=$_POST['defou'];
echo'defult: &nbsp;'.$defoult.'<br>';
$value=$_POST['length'];
echo'value: &nbsp;'.$value.'<br>';
$datatype=$_POST['type'];
echo'datatype :&nbsp;'.$datatype.'<br>';
$index=$_POST['selindex'];
echo'index: &nbsp;'.$index.'<br>';
//checkbox NULL
  $null=filter_input(INPUT_POST,'checknull',FILTER_SANITIZE_STRING);
   if($null)
        {
            $null=$_POST['checknull'];
          echo'thes hy: &nbsp;'.$null.'<br>';
        
         }
  $autoincriemt=filter_input(INPUT_POST,'checkautinc',FILTER_SANITIZE_STRING);
  if ($autoincriemt) {
    $autoincriemt=$_POST['checkautinc'];
    echo'th outer :&nbsp;'.$autoincriemt.'<br>'; 
}
}
    
}




?>