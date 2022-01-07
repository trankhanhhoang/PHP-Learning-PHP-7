<?php
require_once 'example_06_07.php';
require_once 'task_06_01.php';

class ComboMeal extends Entree {
    public function __construct(Ingredient $name, $ingredients)
    {
        parent::__construct($name, $ingredients);
    }
}