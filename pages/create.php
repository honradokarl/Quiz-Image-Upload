<?php 

	include('../sessions/header.php') 

?>
<link rel="stylesheet" href="../assets/css/normalize.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.css">
	<div class="container">
		<div id="create-quiz-form">
			<div class="back-btn">
				<a href="../" class="btn btn-danger">Back</a>
			</div>
			<div id="return-message"><div>
			<form action="../dao/uploads.php" method="POST" enctype="multipart/form-data" id="quiz-form">
				<div class="form-row-default">
					<div class="form-row">
						<div class="form-group col-md-4">
					      	<label for="Question">Question</label>
					      	<input type="text" name="question[]" class="form-control" placeholder="Question">
					    </div>
					    <div class="form-group col-md-4">
					      	<label for="answer">Answer</label>
					      	<input type="text" name="answer[]" class="form-control" placeholder="Answer">
					    </div>
					    <div class="form-group col-md-4">
					      	<label for="answer">Upload Images</label>
					      	<input type="file" name="fileToUpload[]" class="fileUpload">
					    </div>
					</div>
				</div>
				<div class="form-row-append"></div>
				<div>
					<button type="button" id="add-question-btn">Add New Question</button>
				</div>
			  	<button type="submit" class="btn btn-primary" id="create-quiz-btn">Create Quiz</button>
			</form>
		</div>
	</div>
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../assets/js/create.js"></script>
<?php include('../sessions/footer.php'); ?>