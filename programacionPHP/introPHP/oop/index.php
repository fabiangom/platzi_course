<?php
  include 'vehicles/Car.php';
  include 'vehicles/Truck.php';

  use Vehicles\{Car, Truck};

  echo 'Class Car <br>';
  $car = new Car('Fabian');
  $car->move();
  echo 'Owner car: ' . $car->getOwner() . '<br>';


  echo 'Class Truck 1<br>';
  $truck1 - new Truck('Jared', 'pickup');
  $truck1->move();
  // echo 'Owner truck:' . $truck->getOwner();

  echo 'Class Truck 2<br>';
  $truck2 - new Truck('Jared', 'pickup');
  $truck2->move();
  // echo 'Owner truck:' . $truck->getOwner();

  echo '<br>Total Truck: ' . Truck::getTotal() . '<br>';

  
?>
