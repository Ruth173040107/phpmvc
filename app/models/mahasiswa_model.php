<?php 

 class Mahasiswa_model {

 	private $dbh;
 	private $stmt;

 	public function construct()
 	{
 		// data source name
 		$dsn = 'mysql:host=localhost;dbname=phpmvc';

 		try {
 			$this->dbh = new PDO($dsn, 'root', 'root')
 		}catch(PDOException $e){
 			die($e->getMessage());
 		}
 	}

 	public function getallMahasiswa()
 	{
 		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
 		$this->stmt->execute();
 		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
 	}
 }