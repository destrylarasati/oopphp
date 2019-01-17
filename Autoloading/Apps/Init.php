<?php  

// require_once 'Product/InfoProduk.php';
// require_once 'Product/Produk.php';
// require_once 'Product/Komik.php';
// require_once 'Product/Game.php';
// require_once 'Product/CetakInfoProduk.php';


spl_autoload_register(function( $class ){
	require_once __DIR__ . '/Product/' . $class . '.php';
});
