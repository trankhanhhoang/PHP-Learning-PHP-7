<?php
// Формирование символьной строки из элементов массива с помощью функции implode()
$dimsum = array('Chiken Bun', 'Stuffed Duck Web', 'Turnip Cake');
$menu = implode(', ', $dimsum);

print $menu . "\n";

$letters = array('A','B','C','D');
print implode('', $letters);