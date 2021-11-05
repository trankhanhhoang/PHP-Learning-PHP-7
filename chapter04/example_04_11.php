<?php
// Применение числовой конструкции foreach() для переора числовых массивов
$dinner = array('Sweet Corn and Asparagus',
                'lemon Choken',
                'Braised Bamboo Fungus');
foreach ($dinner as $dish){
    print "You can eat: $dish\n";
}