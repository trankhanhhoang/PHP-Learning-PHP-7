<?php
// Пример 5.12. Применение возвращаемого значения в условном операторе if()
function restaurant_check($meal, $tax, $tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

// Рассчитать общую стоимость трапезы на 15,22 долларов США
// с учетом налога на добавленную стоимость (8.25%) и чаевых (15%)
$total = restaurant_check(15.22, 8.25, 15);

print "I only have $20 in cash, so...\n";
if ($total > 20){
    print 'I must pay with my credit card.';
} else {
    print 'I can pay with cash.';
}
print "\n";