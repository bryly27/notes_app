$(document).ready(function(){
			// $(document).on('submit', 'form', function(){
			// 	$.ajax({
			// 		url: $(this).attr('action'),
			// 		type: 'post',
			// 		data: $(this).serialize()
			// 	}).done(function(response){
			// 		$('.response').html(response);
			// 		$('#title').val('');
			// 	})
			// 	return false;
			// })

			$(document).on('submit', 'form', function(){
				$.post(
						$(this).attr('action'),
						$(this).serialize(),
						function(response){
							$('.response').html(response);
							$('#title').val('');
						}
					)
					return false;
			});

			$(document).on('click', 'a', function(){
				$.post(
						$(this).attr('href'),
						$(this).serialize(),
						function(response){
							$('.response').html(response);
						}
					)
					return false;
			})

			$(document).on('change', '.note textarea', function(){
				$(this).parent().submit();
				console.log('changed');
			});

		});