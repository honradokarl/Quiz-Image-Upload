<?php
	
	require 'operations.php';

	$obj = new Operations();

	$errors= array();

	if(isset($_POST['question']) && isset($_POST['answer']) && isset($_FILES['fileToUpload'])) {

		for($i=0; $i<count($_POST['question']); $i++) {

			$file_name = $_FILES['fileToUpload']['name'][$i];
			$file_size = $_FILES['fileToUpload']['size'][$i];
			$file_tmp = $_FILES['fileToUpload']['tmp_name'][$i];
			$file_type = $_FILES['fileToUpload']['type'][$i];
			$file_ext = strtolower(end(explode('.', $file_name)));
			$extensions= array('jpeg', 'jpg', 'gif', 'png');

			if(in_array($file_ext, $extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152) {
				$errors[]='File size must be excactly 2 MB';
			}

			try {
				$ret = copy($file_tmp, "../uploads/".$file_name);
				var_dump($ret);
			} catch (Exception $e) {
				echo $e->getMessage();
			}

			$insert_data = array(
				'question' => $_POST['question'][$i],
				'answer' => $_POST['answer'][$i],
				'image_file_name' => $file_name,
				'image_file_path' => "uploads/".$file_name,
				'date_created' => date('Y-m-d H:i:s')
			);

			$obj->create($insert_data);

		}

   	}

?>