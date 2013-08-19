<?php

	class Product {

		private $id;
		private $name;
		private $size;

		public function getID() {
			$this->id;
		} 

		public function getName() {
			$this->name;
		}

		public function getSize() {
			$this->size;
		}

		public function add($mysqli, $name, $size) {

			$stmt = $mysqli->prepare("INSERT INTO `product` (`name`, `product_size_id`) 
									       VALUES (?, ?)");
			$stmt->bind_param('ss', $name, $size);
			$stmt->execute();
			$stmt->close();

			return $mysqli->insert_id;
		}

	}


?>