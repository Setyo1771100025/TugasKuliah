<?php
class mobil{
	private $merk;
	private $harga;
	private $warna;
	private $type;

	function __construct($merk,$harga,$warna,$type){
		$this->merk=$merk;
		$this->harga=$harga;
		$this->warna=$warna;
		$this->type=$type;
	}
	function bacaMerk(){
		return $this->merk;
	}
	function bacaHarga(){
		return $this->harga;
	}
	function bacaWarna(){
		return $this->warna;
	}
	function bacaType(){
		return $this->type;
	}
}
	$mobil = new mobil("Pajero","Rp 890.000.000,00", "Biru", "SPORT");
	echo "merk mobil=".$mobil->bacamerk()."<br>";
	echo "harga mobil=".$mobil->bacaharga()."<br>";
	echo "warna mobil=".$mobil->bacawarna()."<br>";
	echo "type mobil=".$mobil->bacatype()."<br>";
	
	?>