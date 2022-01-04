<?php

class Entree {
    private string $name;

    protected array $ingredients = array();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    function __construct($name, $entrees){
        if (!is_array($entrees)){
            throw new Exception('$ingredients must be array');
        }
        
        $this->name = $name;
        $this->ingredients = $entrees;
    }
    public function hasIngredient($ingredient): bool
    {
        return in_array($ingredient, $this->ingredients);
    }
    public static function getSizes(): array
    {
        return array('small', 'medium', 'large');
    }
}