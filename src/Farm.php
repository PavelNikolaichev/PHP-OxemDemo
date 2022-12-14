<?php
include_once('Animal.php');
include_once('Chicken.php');
include_once('Cow.php');

class Farm
{
    private array $animals;
    private array $gathered;

    /**
     *  A constructor for Farm-class.
     */
    public function __construct()
    {
        $this->animals = [];
        $this->gathered = [];
    }

    /**
     * Method to add `Animal` to the farm.
     * @param Animal $animal - An animal to add to the farm.
     * @return void
     */
    public function addAnimal(Animal $animal) : void
    {
        $converted_array =  array_map(function ($e) {
            return $e->getId();
        }, $this->animals);

        if (!array_search($animal->getId(), $converted_array, true)) {
            $this->animals[] = $animal;
        }
    }

    /**
     * Method to gather goods from all animals on the farm.
     * @return int - Total amount of goods gathered from all animals.
     */
    public function gatherGoods() : int
    {
        $total = 0;

        foreach ($this->animals as $animal) {
            $total += $animal->gatherGoods();
        }

        $this->gathered[] = $total;
        return $total;
    }

    /**
     * Method to get all animals on the farm.
     * @return array - Array of animals on the farm.
     */
    public function getAnimals() : array
    {
        return $this->animals;
    }

    /**
     * Method to get count of each animal type on the farm.
     * @return array - Array of animal types and their count.
     */
    public function countAnimalTypes() : array
    {
        $types = [];

        foreach ($this->animals as $animal) {
            $types[get_class($animal)] = $types[get_class($animal)] ?? 0;
            $types[get_class($animal)]++;
        }

        return $types;
    }

    /**
     * Method to get the n days of goods gathered from all animals.
     * @param int $n - n days to get statistics from. Standard is 7 days, or a week.
     * @return array - Array of goods gathered from all animals. Each day is an element in the array.
     */
    public function getGatheredNDays(int $n = 7) : array
    {
        return array_slice($this->gathered, -$n, $n);
    }
}