<?php
/**
 * 
 */
class Mahasiswa_model 
{
	
	private $table ='tb_mhs';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	
	public function getAllMahasiswa(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id){
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahMahasiswaBaru($data){
		$query = "INSERT INTO $tble VALUES('',:nama,:umur,:pekerjaan)";
		$this->db->query($query);

		$this->db->bind('nama',$data['nama']);
		$this->db->bind('umur',$data['umur']);
		$this->db->bind('pekerjaan',$data['pekerjaan']);

		$this->db->execute();
		return $this->db->rowCount();



	}
}