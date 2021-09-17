<?php
	class Karyawan{
		private $nama;
		private $gaji;
		private $usia;

		function getNama(){
			return $this->nama;
		}
		function setNama($nama){
			$this->nama = $nama;
		}
		function getGaji(){
			return $this->gaji;
		}
		function setGaji($gaji){
			$this->gaji = $gaji;
		}
		function getUsia(){
			return $this->usia;
		}
		function setUsia($usia){
			$this->usia = $usia;
		}
	}
	class Manager extends Karyawan{
		private $jamKerja = 7.75;

		function jamKerja(){
			return $jamKerja;
		}
		function setJamKerja($jamKerja){
			$this->jamKerja = $jamKerja;
		}
		function getGajiManager(){
			return parent::getGaji()*2;
		}

	}

	$m1 = new Manager();
	$m1->setNama("Aulia Putri Rachmadani");
	$a = $m1->setGaji(1000000);
	$m1->setUsia(22);
	echo "Nama : ".$m1->getNama().
		"<br>Usia : ".$m1->getUsia().
		"<br>Gaji : ".$m1->getGajiManager();
	echo "<br>";
?>