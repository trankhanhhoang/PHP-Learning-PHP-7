<?php
// Пример 6.2. Создание и применение объектов
require_once 'example_06_01.php';
// создать экземляр и присвоить его переменной $soup
$soup = new Entree();
// установить свойства экземпляра в переменной $soup
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');

// создать отдельный экземпляр и присвоить его переменной $sandwich
$sandwich = new Entree();
// установить свойства экземпляра в переменной $sandwich
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken', 'bread');

foreach (['chicken', 'lemon', 'bread', 'water'] as $ing){
    if ($soup->hasIngredient($ing)){
        print "Soup contains $ing.\n";
    }
    if ($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing.\n";
    }
}