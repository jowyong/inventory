function emptySubmit () {
	$.post('../controller/submitNewProduct.php', 
		{}, 
		function () {

		}
	);
}

