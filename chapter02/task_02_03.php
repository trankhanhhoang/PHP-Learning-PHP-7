<?php
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;

$tax_rate = 0.075;
$tip_rate = 0.16;

$food = ($hamburger * 2) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food  * $tax_rate;

$total = $food + $tip +$tax;

printf("Товар: % 20s ,", 'Гамбургер');
printf("Цена: % 5.2f ", $hamburger);
printf("Количество: % 3d", 2);
print "\n";

printf("Товар: % 20s ,", 'Коктель');
printf("Цена: % 5.2f ", $shake);
printf("Количество: % 3d", 1);
print "\n";

print "Стоимость трапезы = " . ($total);