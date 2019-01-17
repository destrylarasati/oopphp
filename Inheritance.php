<?php 


class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmHalaman,
		   $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmHalaman = $jmHalaman;
		$this->waktuMain = $waktuMain;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		// Komik : Naruto | Masashi Kishimoto, Shonen Jump (rp. 40000) - 100 Halaman
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

}


class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmHalaman} Halaman.";
		return $str;
	}
}


class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $Produk ) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 40000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 300000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();