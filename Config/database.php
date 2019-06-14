<?php

namespace Config;

use \PDO;

	abstract class Conexion extends PDO{
		private $dbname = "buria";
		private $host = "localhost";
		private $port = 5432;
		private $user = "postgres";
		private $password = "123";
		private $options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		];
		public function realizandoConexion(){
			try{
				parent::__construct("pgsql:dbname={$this->dbname};host={$this->host};port={$this->port}",$this->user,$this->password,$this->options);
				return true;
			}catch(PDOException $e){
                return false;
			}
		}
	}