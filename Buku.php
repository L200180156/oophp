<?php
	class Buku{
		public $namaPengarang, $judulBuku, $tahunTerbit, $cetakanKe, $hargaJual;
		function __construct($namaPengarang, $judulBuku, $tahunTerbit, $cetakanKe, $hargaJual){
			$this->namaPengarang = $namaPengarang;
			$this->judulBuku = $judulBuku;
			$this->tahunTerbit = $tahunTerbit;
			$this->cetakanKe = $cetakanKe;
			$this->hargaJual = $hargaJual;
		}

		function info(){
			echo "Nama Pengarang : ". $this->namaPengarang."<br>Judul Buku : ".$this->judulBuku. "<br>Tahun Terbit : ".$this->tahunTerbit. "<br>Cetakkan Ke : ".$this->cetakanKe. "<br>Harga Jual: ".$this->hargaJual;
		}
	}

	$buku = new Buku("Aulia", "Halo", "2022", "3", 100000);
	$buku->info();
	echo "<br>";