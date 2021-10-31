<?php
// Однострочный комментарий
$sum = 0;
/*
 * Многострочный
   комментарий
*/
$pow = 1;
for($i = 1; $i <= 5; $i++){
    $sum += $i;
    $pow *= 2 ** $i;
    print "i = $i, sum += i = $sum, ";
    print "pow = $pow\n";
}