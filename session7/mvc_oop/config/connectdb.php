<?php 
class ConnectDB{
	public $conn;
	public function connect(){
		$this->conn = new mysqli('localhost', 'root', 'none', 'batch138_139_mvc_oop');
		return $this->conn;
	}
	public function __construct(){
		$this->connect();
	}
}
?>