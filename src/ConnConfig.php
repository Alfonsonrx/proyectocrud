<?php
namespace App;
use mysqli;
use Exception;

class ConnConfig {
	public $conn;
	public function Connect() {
		try {
			$conn = new mysqli("127.0.0.1", "root", "", "crudprueba", 3306);
			if($conn->connect_errno) {
				echo "Connection failed, MySQL: (" . $conn->connect_errno . " ) " . $conn->connect_error;
			}
		} catch(Exception $e) {
			echo "Error: ", $e->getMessage();
		}
		return $conn;
	}
}
?>