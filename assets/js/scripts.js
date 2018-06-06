(function ($) {
	$(document).ready(function () {

		var button = $('#submit-btn');

		button.on('click', function() {

			var input = $('#first').val();

			if (input === '') {
				return;
			}

			$('.errors').html('');

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
						.html('<div class="alert alert-danger" role="alert">Check number format, please</div>');
				}
				$('#output').val(result);
			})
			.fail(function(jqXHR, textStatus) {
				console.log( "Request failed: " + textStatus );
			});
		});

	});
})(jQuery)