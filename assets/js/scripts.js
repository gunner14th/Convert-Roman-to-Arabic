(function ($) {
	$(document).ready(function () {

		var button = $('#submit-btn');

		button.on('click', function() {

			var input = $('#first').val();

			$.ajax({
				method: "POST",
				url: "app/handle.php",
				dataType: "json",
				data: {
					action: 'convert',
					input: input
				}
			})
			.done(function(msg) {
				$('#output').val(msg);
			});
		});

	});
})(jQuery)