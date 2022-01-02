<?php
// Пример 5.27. Обращение к отдельному файлу в исходном коде
require_once 'example_05_26.php';

// Счет на 25 долларов США плюс налог на добавленную
// стоимость (8.875%) и чаевые (20%)
$total_bill = restaurant_check(25, 8.875, 20);

// Имеется 30 долларов США наличными
$cash = 30;
print "I need to pay with " . payment_method($cash, $total_bill);