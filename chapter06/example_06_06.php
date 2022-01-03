<?php
// Пример 6.6. Вызов конструктора
require_once 'example_06_05.php';
// Суп, его название и ингредиенты
$soup = new Entree('Chicjen Soup', array('chicken', 'water'));
// Сендвич, его название и инградиенты
$sandwich = new Entree('Chicken sandwich', array('chicken', 'bread'));