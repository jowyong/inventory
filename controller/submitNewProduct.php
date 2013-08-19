<?php

	main();

	function main() {

		$name = $_POST['productName'];
		$type = $_POST['productType'];
		$size = $_POST['productSize'];

		error_log($name);
		error_log($size);

		if ($name && $size && $type) {

			include_once('../mysqliConfig.php');
			include_once('../model/product.php');

			$product = new Product();
			$productID = $product->add($mysqli, $name, $size);

		} else {
			error_log('Incomplete POST info');
		}
	}


?>