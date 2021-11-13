<?php
// Сортировка массива с помощью функции asort(). Подходит для ассоциативных массивов

$meal = array('breakfast' => 'Walnut Bun',
                'lunch' => 'Cashew Nuts and White Mushrooms',
                'snack' => 'Dried Mulberries',
                'dinner' => 'Eggplant with chili Sauce');
print "Before sorting\n";
foreach ($meal as $key => $value){
    print " \$meal: $key $value\n";
}

asort($meal);

print "After sorting\n";
foreach ($meal as $key => $value){
    print " \$meal: $key $value\n";
}