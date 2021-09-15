<?php
	class bank{
		public $saldo;
		public $no_rekening;
		public $nama;

		function beriNama($nama){
			$this->nama = $nama;
		}
		function noRek($no_rekening){
			$this->no_rekening = $no_rekening;
		}
		function beriSaldo($saldo){
			$this->saldo=$saldo;
		}
		function cek_saldo(){
			echo $this->saldo;
		}
		function menabung($nabung){
			$this->saldo = $this->saldo + $nabung;
		}
		function menarik($tarik){
			$this->saldo = $this->saldo - $tarik;
		}
		function transfer($tf, $norek){
			$this->saldo = $this->saldo - $tf;
			echo "Anda mentransfer Rp. ".$tf."ke nomor rekening".$norek.". Saldo anda tersisa Rp. ".$this->saldo;
		}
	}
	$nasabah1 = new bank();
	$nasabah1->beriNama("Aulia Putri");
	$nasabah1->noRek("1234566");
	$nasabah1->beriSaldo(100000);
	/*$nasabah1->cek_saldo();*/
	$nasabah1->menabung(150000);
	//$nasabah1->cek_saldo();
	$nasabah1->menarik(50000);
	$nasabah1->cek_saldo();
	$nasabah1->transfer(50000, 12392929);


	

?>	