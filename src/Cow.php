<?php

class Cow extends Animal
{
    private int $id;
    private int $productionRangeMin, $productionRangeMax;

    /**
     * @inheritDoc
     */
    public function __construct(int $id, int $productionRangeMin=8, int $productionRangeMax=12)
    {
        $this->id = $id;
        $this->productionRangeMin = $productionRangeMin;
        $this->productionRangeMax = $productionRangeMax;
    }
}