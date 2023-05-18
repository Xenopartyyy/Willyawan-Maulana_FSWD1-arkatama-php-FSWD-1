<?php

require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';

$animal = new Animal("Elang", "Karnivora");
$animal->getinfo(); 
echo "<br><br>";

$cat = new Cat("Neko");
$cat->getinfo();
echo "<br><br>";

$dog = new Dog("Inu");
$dog->getinfo();

?>