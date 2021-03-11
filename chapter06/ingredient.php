<?php
namespace chapter06;

class Ingredient {
    private string $name;
    private float $cost;

    public function __construct(string $name, float $cost){
        $this->name = $name;
        $this->cost = $cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }


}