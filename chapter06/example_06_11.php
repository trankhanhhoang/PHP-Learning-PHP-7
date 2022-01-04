<?php
// Пример 6.11. Применение подкласса
require_once 'example_06_10.php';

// Суп, его название и ингредиенты
$soup = new Entree('Chicken Soup', array('chicken', 'water'));

// Сэндвич, его название и ингредиенты
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'water'));

// Составное блюдо
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));

foreach (['chicken', 'water', 'pickles'] as $ing){
    if ($combo->hasIngredient($ing)){
        print "Something in the combo contains $ing.\n";
    }
}