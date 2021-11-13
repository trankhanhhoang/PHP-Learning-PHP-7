<?php
// Сортировка массива с помощью функции sort(). Не подходит для ассоциативных массивов.

$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
                'lunch' => 'Cashew Nuts and White Mushrooms',
                'snack' => 'Dried Mulberries',
                'dinner' => 'Eggplant with Chili Sauce');

print "Before sorting\n";
foreach ($dinner as $key => $value){
    print " \$dinner: $key $value\n";
}
foreach ($meal as $key => $value){
    print " \$meal: $key $value\n";
}

sort($dinner);
sort($meal);

print "Before sorting\n";

foreach ($dinner as $key => $value){
    print " \$dinner: $key $value\n";
}

foreach ($meal as $key => $value){
    print " \$meal: $key $value\n";
}