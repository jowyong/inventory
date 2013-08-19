<?php

	include_once('../mysqliConfig.php');
	include_once('../model/type.php');

	$type = new ProductType();
	$productTypes = $type->getAllTypes($mysqli);

	echo json_encode($productTypes);
?>