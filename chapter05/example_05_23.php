<?php
// Пример 5.23. Доступ к глобальным переменным с помощью ключевого слова global
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner (){
    global $dinner;
    print "Dinner was $dinner, but now it`s ";
    $dinner = 'Sauteed Pea Shoots';
    print $dinner;
    print "\n";
}

print "Regular Dinner is $dinner.\n";
vegetarian_dinner();
print "Regular dinner is $dinner";