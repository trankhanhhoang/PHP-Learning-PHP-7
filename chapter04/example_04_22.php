<?php
// Вывод строк HTML-таблицы на экран с помощью функции implode()
$dimsum = array('Chiken Bun', 'Stuffed Duck Web', 'Turnip Cake');
print '<tr><td>' . implode('</td><td>', $dimsum) . '</td></tr>';