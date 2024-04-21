<?php
class car {
    public $brand;

    public function startEngine(){
        echo "Engine started";
    }
}

$car1 = new car();
$car1-> brand = "Toyota";

$car2 = new car();
$car2-> brand ="Honda";

$car1-> startEngine();
echo  $car2-> brand;
?>