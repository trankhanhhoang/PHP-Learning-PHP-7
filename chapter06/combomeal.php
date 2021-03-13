<?php

require_once 'entree.php';

class ComboMeal extends Entree {

    public function __construct($name, $entrees)
    {
        parent::__construct($name, $entrees);
        foreach ($entrees as $entree){
            if (! $entree instanceof Entree){
                throw new Exception ('Elements of $entrees must be Entree objects');
            }
        }
    }

    public function hasIngredient($ingredient): bool
    {
        foreach ($this->ingredients as $entree){
            if ($entree->hasIngredient($ingredient)){
                return true;
            }
        }
        return false;
    }
}

try {
    //создать экземпляр и присвоить его переменной $soup
    $soup = new Entree('Chiken Soup', array('chicken', 'water'));
    //создать отдельный экземпляр и присвоить его переменной $sandwich
    $sandwich = new Entree('Chiken Sandwich', array ('chicken', 'bread'));
} catch (Exception $e) {
    echo 'Couldn\'t create: ' . $e->getMessage();
}

foreach (['chiken', 'lemon', 'bread', 'water']  as $ing) {
    if ($soup->hasIngredient($ing)){
        echo "Soup contains $ing.</br>";
    }
    if ($sandwich->hasIngredient($ing)){
        echo "Sandwich contains $ing.\n";
    }
}

$sizes = Entree::getSizes();
foreach($sizes as $size){
    echo $size . " ";
}

try {
    $drink = new Entree ('Glass of Milk', 'milk');
    if ($drink->hasIngredient('milk')){
        echo "Yummy!";
    }
} catch (Exception $e) {
    echo "Couldn't create the drink: " . $e->getMessage();
}

// Составное блюдо
try {
    $combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));
} catch (Exception $e) {
    echo 'Couldn\'t create: ' . $e->getMessage();
}

foreach (['chicken', 'water', 'pickles'] as $ing){
    if ($combo->hasIngredient($ing)){
        echo "Something in the combo contains $ing.\n";
    }
}