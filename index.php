<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Trucks.php';

$hello = new Cars('black', 4, 'Essence');
var_dump($hello);

try {
    $hello->start();
} catch(Exception $e){
    echo 'Exception received : '. $e->getMessage();
    $hello->triggerParkBrake();
    $hello->start();
} finally {
    echo 'Ma voiture roule comme un donut';
}



var_dump($hello);die;

$bike= new Bicycle('blue', 1, 'foot');
$bike->setCurrentSpeed(0);

$car = new Cars('green', 4, 'electric');

$truck = new Trucks('white', 6, 100, 'Trucky');
$truck->setEnergy('fuel');
$truck->setIsFull(100);

$mercedes = new Trucks('red', 5, 150, 'Mercedes');
$mercedes->setEnergy('electric');

$tesla = new Cars('black', 4, 'electric');
$ferrari = new Cars('red', 2, 'essence');
$decathlonBike = new Bicycle('yellow', 2, 'foot');

//$vehicle = new Vehicle('pink', 4);


var_dump($truck);
var_dump($bike);
var_dump($car);

echo 'The truck nommé ' . $truck->getName() . ' de couleur : ' . $truck->getColor()  . ' est ' . $truck->charging() . '<br>';
echo $truck->forward();
echo '<br> Vitesse du camion'  . ' ' . $truck->getName() . ' : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo'<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';


echo 'The truck ' . $mercedes->getName() . ' '. ' est ' . $mercedes->charging();


echo $bike->forward() . $bike->getColor();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

