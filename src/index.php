<?php
$farm = new Farm();

// add 10 cows
for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow($i));
}

// add 20 chickens
for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken($i));
}

// print info about all animals
// TODO: animal types should be separated.
foreach ($farm->getAnimals() as $animal) {
    echo $animal->getInfo() . PHP_EOL;
}

// 7 times gather goods from all animals
for ($i = 0; $i < 7; $i++) {
    $farm->gatherGoods();
}

// print statistics
// TODO: goods should be separated by types of animals.
echo 'Total goods gathered from all animals: ' . array_sum($farm->getGatheredNDays(7)) . PHP_EOL;

// add 5 chicken and 1 more cow
for ($i = 0; $i < 5; $i++) {
    $farm->addAnimal(new Chicken($i));
}
$farm->addAnimal(new Cow($i));

// print info about all animals.
foreach ($farm->getAnimals() as $animal) {
    echo $animal->getInfo() . PHP_EOL;
}

// 7 times gather goods from all animals
for ($i = 0; $i < 7; $i++) {
    $farm->gatherGoods();
}

// print statistics
// TODO: goods should be separated by types of animals.
echo 'Total goods gathered from all animals: ' . array_sum($farm->getGatheredNDays(7)) . PHP_EOL;