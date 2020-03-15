<?php
	
	class Database {

		protected $db_name = 'quiz';
		protected $db_host = 'localhost';
		protected $db_user_name = 'root';
		protected $db_password = 'password';
		protected $conn = null;

		/*
		 * Initialize database connection
		 */
		public function __construct()
		{
			if($this->conn == null)
			{
				try {
					$this->conn = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name, $this->db_user_name, $this->db_password);
					$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (PDOException $e) {
					die($e->getMessage());
				}
			}
		}

		/*
		 * destroy database connection
		 */
		public function disconnect() {
			$this->conn = null;
		}

	}
?>