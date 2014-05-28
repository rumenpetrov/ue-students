(function($) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {

		// form add result
		$('.form-add form').on('submit', function(event) {
			var $form = $(this);

			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				success: function (data) {
					$('.result').html(data);
				}
			});

			event.preventDefault();
		});

		// form add result
		$('.form-update form').on('submit', function(event) {
			var $form = $(this);

			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				success: function (data) {
					$('.result').html(data);
				}
			});

			event.preventDefault();
		});

		// form delete result
		$('.form-delete form').on('submit', function(event) {
			var $form = $(this);

			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				success: function (data) {
					$('.result').html(data);
				}
			});

			event.preventDefault();
		});
	});
	
})(jQuery);