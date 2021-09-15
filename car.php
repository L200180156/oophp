<?php
	class car{
		public $cadance, $speed, $gear;

		function changeCadance($cadance){
			$this->cadance = $cadance;
		}

		function speedUp($speed){
			$this->speed = $speed;
		}
		function changeGear($gear){
			$this->gear = $gear;
		}
		function printInfo(){
			echo "Cadance : " . $this->cadance . "<br>Speed : " .$this->speed."<br>Gear : ".$this->gear;
		}
	}

	$car1 = new car();
	$car2 = new car();

	$car1->changeCadance(50);
	$car1->speedUp(20);
	$car1->changeGear(1);
	$car1->printInfo();
	echo "<br>";
	$car2->changeCadance(30);
	$car2->speedUp(10);
	$car2->changeGear(1);
	$car2->printInfo();

?>