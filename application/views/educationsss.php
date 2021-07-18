<?php 
	
	class education	{
		private $id;
		private $address;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "service_registration";

		function setId($id) { $this->id = $id;}
		function getId() { return $this->id; }
		function setAddress($address) { $this->store_ref_address = $address; }
		function getAddress() { return $this->store_ref_address; }
		function setLat($lat) { $this->location_latitude = $lat; }
		function getLat() { return $this->location_latitude; }
		function setLng($lng) { $this->location_longitude = $lng; }
		function getLng() { return $this->location_longitude; }

		/*public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}*/

		public function getCollegesBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE location_latitude IS NULL AND location_longitude IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllColleges() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		// public function updateCollegesWithLatLng() {
		// 	$sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
		// 	$stmt = $this->conn->prepare($sql);
		// 	$stmt->bindParam(':lat', $this->lat);
		// 	$stmt->bindParam(':lng', $this->lng);
		// 	$stmt->bindParam(':id', $this->id);

		// 	if($stmt->execute()) {
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }
	}

?>