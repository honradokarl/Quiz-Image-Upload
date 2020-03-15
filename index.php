<?php 
	
	require './dao/operations.php';

	$obj = new Operations();
	$quiz = $obj->read();

	include('./sessions/header.php') 

?>
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/style.css">
    <div class="container">
    	<div class="row">
    		<h2 class="text-center">My Quizzes</h2>
    	</div>

    	<div class="row">
    		<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Question</th>
			      <th scope="col">Answer</th>
			      <th scope="col">Image</th>
			      <th scope="col">Date Created</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		if(!empty($quiz)) { 
			  			foreach($quiz as $key => $val) { ?>

				  			<tr>
				  				<td><?= $val['question']; ?></td>
				  				<td><?= $val['answer']; ?></td>
				  				<td>
				  					<img src="<?= $val['image_file_path']; ?>" alt="<?= $val['question'] ?>" style="width: 100px; height: 100px">		  						
				  				</td>
				  				<td><?= $val['date_created']; ?></td>
				  			</tr>
			  	<?php
			  			}
			  		}
			  	?>
			  </tbody>
			</table>

			<div class="row create-quiz-btn">
	    		<a href="./pages/create.php" class="btn btn-success">Create Quiz</a>
	    	</div>
    	</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
<?php include('./sessions/footer.php'); ?>
