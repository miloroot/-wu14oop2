$(function() {

	// check if jQuery and DOM is ready
	console.log("Tis' working?");


	// grabbing the form info and values
	$('.createChar').submit(function() {
		var charName = $('.charName').val();
		var charClass = $('.chooseClass').val();

		// seeing if the values are working
		console.log(charName + ' - ' + charClass);

		// sending values to DOM
		$('.confirmation').append('You chose the name: ' + charName + '.' + ' With the class: ' + charClass + '.<br>');
		$('.confirmation').append('If this is correct. Click the button. <br> <button class="btn2">Confirm!</button>');

		// sending values to PHP character creation
		$.ajax({
			url: "index.php",
			data: "create",
			dataType: "json",
			success: function(data){
				console.log('Success: ', data);
			},
			error: function(data){
				console.log('Error: ', data);
			}
		});

		// confirm choice and get a random challenge
		$('.btn2').click(function() {
			console.log(charName + ' - ' + charClass + '. Via btn2.');

			// getting the random challenge
			$.ajax({
				url: "classes/challenge.class.php",
				data: "getChallenge",
				dataType: "json",
				success: function(data){
					console.log('Success: ', data);

					$('.currentChallenge').append('You got the challenge: <br> ');
					for (var i in data) {
						$('.currentChallenge').append(data[i] + ' ' + '<br>');
					}
					$('.currentChallenge').append('<button class="btn3">Accept challenge!</button>');
				},
				error: function(data){
					console.log('Error: ', data);
				}
			});
		});

		return false;
	});

})