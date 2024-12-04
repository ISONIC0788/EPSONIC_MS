<?php
// $table =array(
//     array(1,'kilasa' ,'ammm'),
//     array(2,'ebedi' ,'meleki'),
//     array(3,'ituze ' ,'agacyo '),
//     array(4,'emeleki' ,'kalisa'),



// );
//   $data =    array();
//   foreach ($data as $key => $value) {
//       # code...
//   }
  $table = array(
    array(1, 'John', 'Doe'),
    array(2, 'Jane', 'Doe'),
    array(3, 'Bob', 'Smith'),
    array(4, 'Alice', 'White')
);

// Declare an empty array to store the table data
$data = array();

// Loop through each row in the table
foreach ($table as $row) {
    // Append each row to the data array
    $data[] = $row;
}

?>