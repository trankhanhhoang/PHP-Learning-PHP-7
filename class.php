<?php
class Entree {
    private $name;
    private $ingredients = array();

    function __construct($name, $ingredients){
        if (!is_array($ingredients)){
            throw new Exception('$ingredients must be array');
        }
        
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
    public static function getSizes(){
        return array('small', 'medium', 'large');
    }
}

//создать экземпляр и присвоить его переменной $soup
$soup = new Entree('Chiken Soup', array ('chicken', 'water'));

//создать отдельный экземпляр и присвоить его переменной $sandwich
$sandwich = new Entree('Chiken Sandwich', array ('chicken', 'bread'));


foreach (['chiken', 'lemon', 'bread', 'water']  as $ing) {
    if ($soup->hasIngredient($ing)){
        echo "Soup contains $ing.</br>";
    }
    if ($sandwich->hasIngredient($ing)){
        echo "Sandwich contains $ing.</br>";
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

?>