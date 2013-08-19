<?php
?>

<html>

	<head>
	</head>
	
	<body>	

		<div>
			<div>Add New Product Type:</div>
			<form id="addProductForm">
				Name: <input id="productName" type="text" />
				
				Type: <div id="productTypeSelect">
				</div>

				<!-- <select div="productType">
				</select>
				 -->
				Size: <select id="productSize">
					<option value="1">Small</option>
					<option value="2">Medium</option>
					<option value="3">Large</option>
				</select>

				<input type="submit" value="Add Product" />
			</form>	
		</div>

		<div>
			<div>Add New Inventory:</div>
			<form id="addInventoryForm">

				<div id="productTypeSelect">
<!-- 				<select id="inventoryType">
					<option value="shirt">Shirt</option>
					<option value="book">Book</option>
					<option value="electronic">Electronic</option>
				</select> -->
				</div>

				Number: <input id="inventoryNum" type="text" />

				<input type="submit" value="Add Inventory" />
			</form>
		</div>

		<div>Current Inventory:</div>
	</body>


	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/indexScripts.js"></script>

</html>
