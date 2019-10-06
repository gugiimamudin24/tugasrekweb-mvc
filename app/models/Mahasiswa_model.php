<?php

class Mahasiswa_model {
	private $dbh; //databese handler
	private $stmt;

	public function __construct()
	{
		//data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMessage());
		}

	}

	// private $mhs =
	// [
	// 	[
	// 		"nama" => "Gugi Imamudin",
	// 		"nrp" =>  "153040064",
	// 		"email" => "gugiimamudin@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Muhammad Saeful Ulum",
	// 		"nrp" =>  "153040082",
	// 		"email" => "aepige@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Dede Firmansyah",
	// 		"nrp" =>  "153040069",
	// 		"email" => "putrabambu@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Rayi Oktora",
	// 		"nrp" =>  "153040066",
	// 		"email" => "rayioktora@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	]


	// ];

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}





