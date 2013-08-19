var indexScripts = (function() {

	var _this;

	return {
		
		start: function () {
			_this = this;
			_this.setupEventListeners();
			_this.getProductTypes();
		}, 

		setupEventListeners: function () {
			$('form#addProductForm').on('submit', _this.submitProductForm);
			$('form#addInventoryForm').on('submit', _this.submitInventoryForm);
		},

		getProductTypes: function () {
			$.post('../controller/getProductTypes.php', 
				{}, 
				function (data) {
					// console.log($.parseJSON(data));
					var productTypes = $.parseJSON(data),
						selectDiv = $('div#productTypeSelect'),
						html = '<select>';
					// console.log(productTypes[0]);	
					// console.log(productTypes.length);
					for (var i = 0; i < productTypes.length; i++) {
						html += '<option value="' + productTypes[i].id + '">' 
							+ productTypes[i].type + '</option>';
					}
					html += '</select>';
					selectDiv.html(html);
				}
			);
		},

		submitProductForm: function (e) {
			e.preventDefault();
			var productName = $('input#productName').val(),
				productSize = $('select#productSize').val();

			$.post('../controller/submitNewProduct.php', 
				{productName: productName, productSize: productSize}, 
				function () {

				}
			);
		},

		submitInventoryForm: function (e) {
			console.log("inventory");
			e.preventDefault();
			var inventoryType = $('select#inventoryType').val(),
				inventoryNum = $('input#inventoryNum').val();

			$.post('../controller/submitNewInventory.php',
				{inventoryType: inventoryType, inventoryNum: inventoryNum},
				function () {

				}
			);
		},

	};
}());
indexScripts.start();