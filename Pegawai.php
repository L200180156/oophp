<?php
	class Pegawai{
		public $gajiPokok = 1000000;
	}

	class Programmer extends Pegawai{
		public $gajiLembur = 50000;
		public $gajiPerbulan;
	}
	class Teknisi extends Pegawai{
		public $gajiLembur = 40000;
		public $gajiPerbulan;
	}

	$programmer = new Programmer();
	$gajiPerbulan = $programmer->gajiPokok + $programmer->gajiLembur;
	echo $gajiPerbulan;
	echo "<br>";
	$teknisi = new Teknisi();
	$gajiPerbulan = $teknisi->gajiPokok + $teknisi->gajiLembur;
	echo $gajiPerbulan;
?>