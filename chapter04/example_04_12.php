<?php
// Перебор числового массива с помощью языковой конструкции for()
$dinner = array('Sweet Corn and Asparagus',
                'lemon Choken',
                'Braised Bamboo Fungus');
for($i=0, $num_dishes = count($dinner); $i < $num_dishes; $i++){
    print "Dish number $i is $dinner[$i]\n";
}