<?php

class koneksi{
	protected $db;
	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=dblaundry", "root", "");
		} catch (PDOException $e) {
			die ("Error " . $e->getMessage());
		}
	}
}
?>