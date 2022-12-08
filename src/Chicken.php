<?php
require_once 'Animal.php';

class Chicken extends Animal
{

    /**
     * A constructor for Chicken-class.
     * @param int $id - Chicken id.
     * @param int $productionRangeMin - Minimum amount of goods that can be gathered from the chicken. Standard is 0.
     * @param int $productionRangeMax - Maximum amount of goods that can be gathered from the chicken. Standard is 1.
     */
    public function __construct(private int $id, private int $productionRangeMin=0, private int $productionRangeMax=1)
    {
        Parent::__construct($id, $productionRangeMin, $productionRangeMax);
    }
}