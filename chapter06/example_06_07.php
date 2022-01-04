<?php
// Пример 6.7. Генерирование исключения
class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name, $entrees){
        if (! is_array($entrees)){
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $entrees;
    }

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
}