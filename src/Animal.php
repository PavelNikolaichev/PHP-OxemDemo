<?php

abstract class Animal
{
    private int $id;
    private int $productionRangeMin, $productionRangeMax;

    /**
     * A constructor for Animal-class.
     * @param int $id - Animal id.
     * @param int $productionRangeMin - Minimum amount of goods that can be gathered from the animal.
     * @param int $productionRangeMax - Maximum amount of goods that can be gathered from the animal.
     */
    abstract public function __construct(int $id, int $productionRangeMin, int $productionRangeMax);


    /**
     * Method that generates a random number between the min and max production range and returns it.
     * @return int - The amount of goods gathered from the animal.
     */
    public function gatherGoods() : int
    {
        return rand($this->getProductionRangeMin(), $this->getProductionRangeMax());
    }

    /**
     * Method to get the id of the animal.
     * @return int - The id of the animal.
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Method to get the minimum amount of goods that can be gathered from the animal.
     * @return int - The minimum amount of goods that can be gathered from the animal.
     */
    public function getProductionRangeMin() : int
    {
        return $this->productionRangeMin;
    }

    /**
     * Method to get the maximum amount of goods that can be gathered from the animal.
     * @return int - The maximum amount of goods that can be gathered from the animal.
     */
    public function getProductionRangeMax() : int
    {
        return $this->productionRangeMax;
    }
}