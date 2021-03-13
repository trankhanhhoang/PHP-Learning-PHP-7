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

    function __construct($name, $ingredients){
        if (!is_array($ingredients)){
            throw new Exception('$ingredients must be array');
        }
        
        $this->name = $name;
        $this->ingredients = $ingredients;
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