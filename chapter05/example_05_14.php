<?php
// Пример 5.14. Применение массива, возвращаемого функцией
function restaurant_check2($meal, $tax, $tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip = $meal + $tax_amount + $tip_amount;

    return array($total_notip, $total_tip);
}

$totals = restaurant_check2(15.22, 8.25, 15);

print "I only have $20 in cash, so...\n";
if ($totals[0] < 20){
    print "The total without tip is less than $20.\n";
}
if ($totals[1] < 20){
    print "The total with tip is less than $20.\n";
}
