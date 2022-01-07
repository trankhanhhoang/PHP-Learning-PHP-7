<?php
class Ingredient {
    private $name;
    private $cost;

    /**
     * @param $name
     * @param $cost
     */
    public function __construct($name, $cost)
    {
        if (!isset($name)) {
            throw new Exception('$name should not be empty');
        }
        if (!isset($cost)) {
            throw new Exception('$cost should not be empty');
        }
        $this->name = $name;
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost){
        $this->cost = $cost;
    }
}