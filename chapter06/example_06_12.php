<?php
// Пример 6.12. Ввод конструктора в подкласс
require_once 'example_06_07.php';

class ComboMeal extends Entree {
    public function __construct($name, $entrees)
    {
        parent::__construct($name, $entrees);
        foreach ($entrees as $entree){
            if (! $entree instanceof Entree){
                throw new Exception('Elements of $entrees must be Entree objects');
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