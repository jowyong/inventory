<?php

	class ProductType {

		private $id;
		private $type;

		public function getID() {
			$this->id;
		} 

		public function getType() {
			$this->type;
		}

		public function getAllTypes($mysqli) {
			$typeArray = array();
			$stmt = $mysqli->prepare("SELECT `product_type_id`, `type` 
										FROM `product_type`
									   WHERE 1");
			$stmt->execute();
			$stmt->bind_result($id, $type);
			while($stmt->fetch()) {
				$typeArray[] = array(
					"id"=>$id,
					"type"=>$type
				);
			}
			$stmt->close();
			return $typeArray;
		}

	}


?>