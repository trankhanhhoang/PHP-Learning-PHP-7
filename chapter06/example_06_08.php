<?php
// Пример 6.8. Создание условий для генерирования исключения
require_once 'example_06_07.php';

$drink = new Entree('Glass of milk', 'milk');
if ($drink->hasIngredient('milk')){
    print 'Yummy!';
}