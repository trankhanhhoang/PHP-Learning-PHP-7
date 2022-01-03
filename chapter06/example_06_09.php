<?php
// Пример 6.9. Обработка исключения
require_once 'example_06_07.php';

try {
    $drink = new Entree('Glass of Milk', ',milk');
    if ($drink->hasIngredient('milk')){
        print 'Yummy!';
    }
} catch (Exception $e) {
    print "Couldn't create the drink: " . $e->getMessage();
}