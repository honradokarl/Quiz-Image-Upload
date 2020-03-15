$(document).ready(function() {
	console.log('Hello create quiz!');

	$("#add-question-btn").click(function() {

		$(".form-row-append").append(
			'<div class="form-row">'+
				'<div class="form-group col-md-4">'+
			      	'<label for="Question">Question</label>'+
			      	'<input type="text" name="question[]" class="form-control" placeholder="Question">'+
			    '</div>'+
			    '<div class="form-group col-md-4">'+
			      	'<label for="answer">Answer</label>'+
			      	'<input type="text" name="answer[]" class="form-control" placeholder="Answer">'+
			    '</div>'+
			    '<div class="form-group col-md-4">'+
			      	'<label for="answer">Upload Image</label>'+
			      	'<input type="file" name="fileToUpload[]" class="fileUpload">'+
			    '</div>'+
			'</div>'
		);

	});

	$("#quiz-form").on("submit", function(e) {

		e.preventDefault();

		var form = $(this)[0];

		console.log(form);

		var data = new FormData(form);

		console.log(data);

		$.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: "../dao/uploads.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            beforeSend: function() {
            	console.log("Sending...");
            },
            success: function (data) {
                console.log("success: ", data);
                alert("Success! New Quiz Successfully Created!");
            },
            error: function (e) {
                console.log("error: ", e);
                alert("Error! ", e);
            }
        });

	});

});