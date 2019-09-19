<?php
/**
 * 
 */
class Mahasiswa_model 
{
	
	private $dbh; //db handler
	private $stmt; //store query


	public function __construct(){
		//db source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
		 	$this->dbh = new PDO($dsn,'root','');

		 } catch (PDOException $e) {
		 	die($e->getMessage());
		 } 
	}

	public function getAllMahasiswa(){
		$this->stmt = $this->dbh->prepare('SELECT * FROM tb_mhs');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}