<?php
require_once 'Farm.php';
require_once 'Chicken.php';
require_once 'Cow.php';

class FarmSeeder
{
    /**
     * Method to seed the farm with animals.
     * @param Farm $farm - The farm to seed.
     * @param int $cows - The amount of cows to seed.
     * @param int $chickens - The amount of chickens to seed.
     * @return void
     */
    function seed(Farm $farm, int $cows, int $chickens): void
    {
        for ($i = 0; $i < $cows; $i++) {
            $farm->addAnimal(new Cow(rand(1, 1000000)));
        }

        for ($i = 0; $i < $chickens; $i++) {
            $farm->addAnimal(new Chicken(rand(1, 1000000)));
        }
    }
}