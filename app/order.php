<?php
class order{
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
		$sql = "select * from tb_order";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}
      		return $data;
	}

	public function input() {
		if(isset($_POST['submit'])){
		$id     	 = $_POST['id_order'];
		$nama_artis  = $_POST['nama_order'];

		$sql = "INSERT INTO tb_order (id_order, nama_order) VALUES (:id_order, :nama_order)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id_order", $id);
		$stmt->bindParam(":nama_order", $nama_order);
		$stmt->execute();

		return false;
	}
}
	public function delete($id)
	{
		$sql = "DELETE FROM tb_order WHERE id_order='$id'";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id_order", $id);
		$stmt->execute();

		return false;
	}
}