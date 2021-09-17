<?php 
	abstract class bangunruang{
		abstract public function luas();
		abstract public function keliling();

		function getLuas(){
			return luas();
		}
		function getKeliling(){
			return keliling();
		}
	}

	class Persegi extends bangunruang{
		public $sisi = 5;

		public function luas(){
			return $this->sisi * $this->sisi;
		}
		public function keliling(){
			return $this->sisi * 4;
		}
	}
	$psg = new Persegi();
	echo "Keliling = ".$psg->keliling();
	echo "<br>";
	echo "Luas = ".$psg->luas();
?>