<?php  

// require_once 'Product/InfoProduk.php';
// require_once 'Product/Produk.php';
// require_once 'Product/Komik.php';
// require_once 'Product/Game.php';
// require_once 'Product/CetakInfoProduk.php';
// require_once 'Product/User.php';

// require_once 'Service/User.php';


spl_autoload_register(function( $class ){
		// Apps\Product\User = ["Apps", "Product", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Product/' . $class . '.php';
});

spl_autoload_register(function( $class ){
		// Apps\Service\User = ["Apps", "Service", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Service/' . $class . '.php';
});