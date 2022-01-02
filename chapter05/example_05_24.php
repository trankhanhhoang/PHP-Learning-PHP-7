<?php
// Пример 5.24. Объявление типа переменной
function countdown(int $top){
    while ($top >0){
        print "$top..";
        $top--;
    }
    print "boom!\n";
}

$counter = 5;
countdown($counter);
print "Now, counter is $counter";