<?php
// Пример 5.21. Доступ к глобальным переменным из массива $GLOBALS
$dinner = 'Curry Cuttlefish';

function macrobiotic_dinner(){
    $dinner = "Some Vegetables";
    print "Dinner is $dinner";
    // насладиться дарами океана
    print " but I`d rather have ";
    print $GLOBALS['dinner'];
    print "\n";
}

macrobiotic_dinner();
print "Regular dinner is: $dinner";