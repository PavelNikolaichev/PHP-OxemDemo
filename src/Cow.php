<?php
require_once 'Animal.php';

class Cow extends Animal
{
    /**
     * @inheritDoc
     */
    public function __construct(private int $id, private int $productionRangeMin=8, private int $productionRangeMax=12)
    {
        Parent::__construct($id, $productionRangeMin, $productionRangeMax);
    }
}