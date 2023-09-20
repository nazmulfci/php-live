<?php
// ============= for loop 
// function printValue($a){
//     echo $a.',';
// }
// for ($i=2;$i<22;$i=$i+2){
//     printValue($i);
// }



// ============= while loop 
// function printValue($a){
//     echo $a.',';
// }
// $i=2;
// while ($i<22){
//     printValue($i);
//     $i=$i+2;
// }

// ============= do while loop 
function printValue($a){
    echo $a.',';
}
$i=2;

do {
    printValue($i);
    $i+2;
  } while ($i<22);