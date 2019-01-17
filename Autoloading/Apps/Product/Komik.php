<?php 

class Komik extends Produk  implements InfoProduk{
	public $jmHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmHalaman = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->jmHalaman = $jmHalaman;
	}

		public function getInfo() {
		// Komik : Naruto | Masashi Kishimoto, Shonen Jump (rp. 40000) - 100 Halaman
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

	public function getInfoProduk() {
		$str = "Komik : " . $this->getInfo() . " - {$this->jmHalaman} Halaman.";
		return $str;
	}
}