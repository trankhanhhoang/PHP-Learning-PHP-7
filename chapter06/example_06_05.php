<?php
// Пример 6.5. Инициализация объекта в конструкторе
class Entree {
    public $name;
    public $ingredients = array ();

    public function __construct($name, $entrees){
        $this->name = $name;
        $this->ingredients = $entrees;
    }

    public function hasIngredients($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
}