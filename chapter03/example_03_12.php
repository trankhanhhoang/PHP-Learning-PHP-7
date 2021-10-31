<?php
$x = strcmp('x54321', 'x5678');
print "\$x = $x\n";
if ($x > 0) {
    print 'The string "x54321" is greater than the string "x5678"';
} elseif ($x < 0) {
    print 'The string "x54321" is less than the string "x5678"';
}
print "\n";

$x = strcmp('54321', '5678');
print "\$x = $x\n";
if ($x > 0) {
    print 'The string "54321" is greater than the string "5678"';
} elseif ($x < 0) {
    print 'The string "54321" is less than the string "5678"';
}