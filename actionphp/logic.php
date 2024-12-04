<?php
$cars= array(
    array("ebedi",1,23),
    array("kigali",1,2),
    array("ruger",1,2), 
);
for ($i=0; $i < 3 ; $i++) { 
    echo"<p>column number</p>";
    echo "<ul>";
    for ($b=0; $b <3 ; $b++) { 
       echo"<li>".$cars[$i][$b]."</li>";
    }
  echo"<ul>"; 
}
// $col=5;

// $colums=array(
//     for ($c=0; $c <$col ; $c++) { 
//         array("kalisa",12,23),
//     }
// );
// for ($b=0; $b <$c ; $b++) { 
//     echo"the number";
//     for ($n=0; $n <3 ; $n++) { 
//         echo"<br>".$colums[$b][$n];
//     }
// }
$array=array(
  "kkk"=array(),
  "ke"=array()


);

?>