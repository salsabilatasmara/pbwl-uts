<?php
class kiloan{
	private $db;
	public function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=dblaundry", "root", "");
		} catch (PDOException $e){
			die ("Error " . $e->getMessage());
		}
	}
	public function tampil()
	{
		$sql = "select * from tb_kiloan";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}
      		return $data;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_kiloan WHERE jenis_kiloan='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":jenis", $id);
		$stmt->execute();

		return false;
	}
}