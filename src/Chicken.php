<?php

class Chicken extends Animal
{
    private int $id;
    private int $productionRangeMin, $productionRangeMax;

    /**
     * A constructor for Chicken-class.
     * @param int $id - Chicken id.
     * @param int $productionRangeMin - Minimum amount of goods that can be gathered from the chicken. Standard is 0.
     * @param int $productionRangeMax - Maximum amount of goods that can be gathered from the chicken. Standard is 1.
     */
    public function __construct(int $id, int $productionRangeMin=0, int $productionRangeMax=1)
    {
        $this->id = $id;
        $this->productionRangeMin = $productionRangeMin;
        $this->productionRangeMax = $productionRangeMax;
    }
}