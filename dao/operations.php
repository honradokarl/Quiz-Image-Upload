<?php

	require 'database.php';

	class Operations extends Database
	{
		public function __construct() {
			parent::__construct();
			//var_dump($this->conn);
		}

		public function read()
		{
			return $this->conn->query('SELECT * FROM quiz ORDER BY id DESC')->fetchAll();
		}

		public function create(Array $data)
		{
			if(!empty($data))
			{
				try {

					$sql = 'INSERT INTO quiz (question, answer, image_file_name, image_file_path, date_created) VALUES (?, ?, ?, ?, ?)';
					$insert = $this->conn->prepare($sql);
					$insert->execute([$data['question'], $data['answer'], $data['image_file_name'], $data['image_file_path'], $data['date_created']]);

					return true;

				} catch (Exception $e) {
					die($e->getMessage());
				}
			}

			return false;
		}

		public function update()
		{

		}

		public function delete()
		{

		}
	}
?>