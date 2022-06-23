<?php
class satuan{
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
		$sql = "select * from tb_satuan";
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
		$sql = "DELETE FROM tb_satuan WHERE jenis_satuan='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":jenis_satuan", $id);
		$stmt->execute();

		return false;
	}
}