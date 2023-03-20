<?php

use SOLID\LSP\Rectangle;
use SOLID\SRP\Bus;
use SOLID\OCP\Ship;
use SOLID\OCP\Trip;
use SOLID\SRP\Route;
use SOLID\SRP\Driver;
use SOLID\OCP\MoveOverWaves;


require_once( __DIR__ . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php');


// $mohammed = new Driver('Mohammed Yehia', 36, 'SA746253', "Cairo");

// $route80 = new Route('Cairo', 'Alexandria', 302);
// $route90 = new Route('Alexandria', 'Marsa Matrouh', 435);

// $bus = new Ship();
// $bus->setDriver($mohammed);
// $bus->setColor('red');
// $bus->setMaximumSpeed(135);
// $bus->addRoute($route80);
// $bus->addRoute($route90);
// $bus->setMovable(new MoveOverWaves());

// $trip = new Trip($bus, 'R210', 35.25, 120);
// echo $trip->move();


$rect = new Rectangle();
$rect->setHeight(4);
$rect->setWidth(6);
echo $rect->calculateArea();


