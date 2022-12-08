<?php
require_once 'Farm.php';
require_once 'FarmSeeder.php';
require_once 'Chicken.php';
require_once 'Cow.php';

/**
 * Function to print out the farm's animals count by animal types.
 * @param Farm $farm - A farm to print.
 * @return void
 */
function print_animals(Farm $farm): void
{
    echo '<p>Animals on the farm: </p><ul>';
// print info about all animals.
    foreach ($farm->countAnimalTypes() as $animal => $count) {
        echo "<li>{$animal}: {$count}</li>" . PHP_EOL;
    }

    echo '</ul>';
}

$farm = new Farm();
$seeder = new FarmSeeder();

$seeder->seed($farm, 10, 20);

print_animals($farm);

// 7 times gather goods from all animals
for ($i = 0; $i < 7; $i++) {
    $farm->gatherGoods();
}

// print statistics
echo '<p>Goods gathered from all animals this week: ' . array_sum($farm->getGatheredNDays(7)) . '</p>' . PHP_EOL;

// add 5 chicken and 1 more cow
$seeder->seed($farm, 1, 5);

print_animals($farm);

// 7 times gather goods from all animals
for ($i = 0; $i < 7; $i++) {
    $farm->gatherGoods();
}

// print statistics
echo '<p>Goods gathered from all animals this week: ' . array_sum($farm->getGatheredNDays(7)) . '</p>' . PHP_EOL;