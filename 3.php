<?php

class Vehicle {
    private $brand;
    private $model;
    private $year;


    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

   
    public function getModel() {
        return $this->model;
    }

  
    public function getYear() {
        return $this->year;
    }

    public function displayDetails() {
        echo "Vehicle Details:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }
}


$vehicle1 = new Vehicle("Toyota", "Camry", 2020);
$vehicle1->displayDetails();

$vehicle2 = new Vehicle("Honda", "Civic", 2019);
$vehicle2->displayDetails();

?>

