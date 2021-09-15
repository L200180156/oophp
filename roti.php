<?php
	class roti{
		public $warna;
		public $rasa;
		public $berat;
		public $harga;
	

	function beriWarna($warna){
		$this->warna=$warna;
	}
	function beriRasa($rasa){
		$this->rasa=$rasa;
	}
	function timbangBerat($berat){
		$this->berat=$berat;
	}
	function hargaJual($harga){
		$this->harga=$harga;
	}

	function infoRoti(){
		echo "Warna roti: ".$this->warna;
	}
}
	$roti1 = new roti();
	$roti1->beriWarna("cokelat");
	$roti1->infoRoti();

?>