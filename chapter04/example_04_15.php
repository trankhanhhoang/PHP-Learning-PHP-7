<?php
//  Проверка наличия элемента в массиве по конкретному ключу
$meals = array('Walnut Bun' =>1,
            'Cashew Nuts and White Mushrooms' =>4.95,
            'Dried Mulberries' => 3.00,
            'Eggplant with Chili Sauce' => 6.50,
            'Shrimp Puffs' => 0); // Shrimp Puffs are free!
$books = array("The Eater's Guide to Chinese Characters",
                'How to Cook and Eat in Chinesse');
// Следующая проверка дает истинное значение
if (array_key_exists('Shrimp Puffs', $meals)){
    print "Yes, we have Shrimp Puffs\n";
}
// Следующая проверка дает ложное значение
if (array_key_exists('Steak Sandwich', $meals)){
    print "We have a Steak Sandwich\n";
}
// Следующая проверка дает истинное значение
if (array_key_exists(1, $books)){
    print "Element 1 is How to Cook and Eat in Chinese\n";
}
