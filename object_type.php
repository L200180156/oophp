<?php
	class Produk{
		public $judul, $penulis, $penerbit, $harga;

		function __construct($judul, $penulis, $penerebit, $harga){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerebit = $penerebit;
			$this->harga = $harga;
		}
		function getLabel(){
			return "$this->penulis, $this->penerebit";
		}
	}
	class CetakInfoProduk{
		public function cetak(Produk $produk){
			$str = "{$produk->judul}|{$produk->getLabel()}(Rp. {$produk->harga})";
			return $str;
		}
	}
	$produk1 = new Produk("Naruto", "Masashi", "Shonen Jump", 300000);
	$infoProduk = new CetakInfoProduk();
	echo $infoProduk->cetak($produk1);
?>