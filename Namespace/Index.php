<?php 

require_once 'Apps/Init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 40000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 300000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use Apps\Service\User as ServiceUser;
use Apps\Product\User as ProductUser;


new ServiceUser();
echo "<br>";
new ProductUser();
