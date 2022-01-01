<?php
// Пример 5.9. Изменение значений аргументов в функции
function countdown($top){
    while ($top){
        print "$top...";
        $top--;
    }
    print "boom!\n";
}

$counter = 5;
countdown($counter);
print "Now, counter is $counter";