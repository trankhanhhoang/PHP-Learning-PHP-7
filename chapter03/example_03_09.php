<?php
// Сравнение чисел с плавающей точкой
$price_1 = 10.00001;
$price_2 = 10.00003;

if (abs($price_1 - $price_2) < 0.00001) {
    print 'price_1 and price_2 are equal.';
} else {
    print 'price_1 and price_2 are not equal.';
}