(function ($) {
	$(document).ready(function () {

		var button = $('#submit-btn');

		button.on('click', function() {	// listen button event

			var input = $('#first').val();

			if (input === '') {
				return;
			}

			$('.errors').html('');	// remove the error message

			$.ajax({
				method: "POST",
				url: "app/handler.php",
				dataType: "json",
				data: {
					action: 'convert',
					input: input
				}
			})
			.done(function(result) {
				if (!result) {
					$('.errors')
						.html('<div class="alert alert-danger" role="alert">Check number format, please</div>'); // error message
				}
				$('#output').val(result); // show result
			})
			.fail(function(jqXHR, textStatus) {
				console.log( "Request failed: " + textStatus );
			});
		});

	});
})(jQuery)