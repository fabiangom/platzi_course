<?php
  class Vehiculo {
    private $owner;

    public function __construct($owner) {
      $this->owner = $owner;
      echo 'construct <br>';
    }

    // public function __destruct() {
    //   echo 'destruct <br>';
    // }

    public function move() {
      echo 'moving <br>';
    }

    public function getOwner() {
      return $this->owner;
    }

    public function setOwner($owner) {
      $this->owner = $owner;
    }
  }

  class Car extends Vehiculo {
    public function move() {
      echo 'Car: moving <br>';
    }
  }

  class Camioneta extends Vehiculo {
    private $type;

    public function __construct($ownerName, $type) {
      $this->type = $type;
      parent::__construct($ownerName);
    }

    public function move() {
      echo 'Camioneta ' . $this->type . ': moving <br>';
    }
  }

  echo 'Class Car <br>';
  $car = new Car('Fabian');
  $car->move();
  echo 'Owner car: ' . $car->getOwner() . '<br>';

  echo 'Class Camioneta <br>';
  $camioneta - new Camioneta('Jared', 'pickup');
  $camioneta->move();
  echo 'Owner camioneta:' . $camioneta->getOwner();

?>
