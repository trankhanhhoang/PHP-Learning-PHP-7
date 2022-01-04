<?php
// Пример 6.10. Расширение класса Entree
require_once 'example_06_07.php';

class ComboMeal extends Entree {
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