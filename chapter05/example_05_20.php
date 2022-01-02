<?php
// Пример 5.20. Область действия переменных
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
    print "Dinner is $dinner, or ";
    $dinner = 'Sauteed Pea Shoots';
    print $dinner;
    print "\n";
}

function kosher_dinner(){
    print "Dinner is $dinner, or ";
    $dinner = 'Kung Pao Chicken';
    print $dinner;
    print "\n";
}

print 'Vegetarian ';
vegetarian_dinner();
print 'Kosher ';
kosher_dinner();
print "Regulan dinner is $dinner";