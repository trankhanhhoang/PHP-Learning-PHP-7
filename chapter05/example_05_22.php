<?php
// Пример 5.22. Видоизменение переменной в массиве $GLOBALS
$dinner = 'Curry Cuttlefish';

function hungry_dinner(){
    $GLOBALS['dinner'] .= ' and Deep-Fried Taro';
}
print "Regular dinner is $dinner\n";
hungry_dinner();
print "Hungry dinner is $dinner";