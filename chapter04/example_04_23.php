<?php
// Преобразование символьной строки в массив с помощью функции explode()
$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);

print "The second fish is $fish_list[1]";