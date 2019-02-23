<?php  
	class InfoDB
	{
		private $urlDB = "127.0.0.1:3306";
		private $hostDB = "root";
		private $passDB = "";
		private $nameDB = "crud";
		public $conn;

		public function InfoDB()
		{
			$this->conn = mysqli_connect($this->urlDB, $this->hostDB, $this->passDB, $this->nameDB);
		}
	}
?>