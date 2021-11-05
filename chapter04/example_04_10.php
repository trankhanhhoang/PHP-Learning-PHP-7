<?php
// Модификация массива с помощью языковой конструкции foreach()
$meals = array('Walnut Bun' =>1,
                'Cashew Nuts and White Mushrooms' =>4.95,
                'Dried Mulberries' => 3.00,
                'Eggplant with Chili Sauce' => 6.50);
foreach ($meals as $dish => $price){
    // выражение $price = $price * 2 НЕ пройдет
    $meals[$dish] = $meals[$dish] * 2;
}
// перебрать массив снова и вывести изменненные
// значения его элементов
foreach ($meals as $dish => $price) {
    printf("The new price of %s is \$%.2f.\n", $dish, $price);
}