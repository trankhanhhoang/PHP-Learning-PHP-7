<?php
$cities = array('Нью-Йорк' => 8175133,
    'Лос-Анджелес, шт. Калифорния' => 3792621,
    'Чикаго, шт. Иллинойс' => 2695598,
    'Хьюстон, шт. Техас' => 2100263,
    'Филадельфия, шт. Пенсильвания' => 1526006,
    'Феникс, шт. Аризона' => 1445632,
    'Сан-Антонио, шт. Техас' => 1327407,
    'Сан-Диего, шт. Калифорния' => 1307402,
    'Даллас, шт Техас' => 1197816,
    'Сан-Хосе, шт. Калифония' => 945942);
$count_people = 0;

ksort($cities);

print('<table>'."\n");
foreach ($cities as $city => $count){
    print ("<tr><td>$city</td><td>$count</td></tr>\n");
    $count_people += $count;
}
print("<tr><td>ALL</td><td>$count_people</td></tr>\n");
print('</table>');

print("\n<p>\n");

asort($cities);
print("<table>\n");
foreach ($cities as $city => $count){
    print ("<tr><td>$city</td><td>$count</td></tr>\n");
}
print("<tr><td>ALL</td><td>$count_people</td></tr>\n");
print('</table>');