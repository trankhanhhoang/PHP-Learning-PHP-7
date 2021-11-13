<?php
// Вставка элементов массива в символьные строки, заключаемые в двойные кавычки
$meals['breakfast'] = 'Walnut Bun';
$meals['lunch'] = 'Eggplant with Chili Sauce';
$amounts = array(3, 6);

print "For breakfast, I'd like $meals[breakfast] and for lunch, \n";
print "I'd like $meals[lunch]. I want $amounts[0] at breakfast and \n";
print "$amounts[1] at lunch.";