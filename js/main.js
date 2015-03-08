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
		$('.confirmation').html('You chose the name: ' + charName + '.' + ' With the class: ' + charClass + '.<br>');
		$('.confirmation').append('If this is correct. Click the button. <br> <button class="btn2">Confirm!</button>');

		// if no name is chosen give error
		if (charName.length <= 0) {
			$('.confirmation').html('Please chose a name!');
		}

		// sending values to PHP character creation
		if (charClass == 'nerd') {
			console.log('YEEEAAAAHHH!!!');
			// ajax call for user choosing nerd
			$.ajax({
				url: "index.php",
				data: "nerd",
				dataType: "json",
				success: function(data){
					console.log('Success: ', data);
				},
				error: function(data){
					console.log('Error: ', data);
				}
			});
		}
		else if (charClass == 'javascriptNerd') {
			console.log('SUPER AWESOME!');
			// ajax call for user choosing javascript nerd
			$.ajax({
				url: "index.php",
				data: "javascriptNerd",
				dataType: "json",
				success: function(data){
					console.log('Success: ', data);
				},
				error: function(data){
					console.log('Error: ', data);
				}
			});
		}
		else if (charClass == 'desginNerd') {
			console.log('I LIKE DESIGNZ!');
			// ajax call for user choosing design nerd
			$.ajax({
				url: "index.php",
				data: "designNerd",
				dataType: "json",
				success: function(data){
					console.log('Success: ', data);
				},
				error: function(data){
					console.log('Error: ', data);
				}
			});
		}
		else if (charClass == 'phpNerd') {
			console.log('PHP IS MY WEAPONZ!');
			// ajax call for user choosing php nerd
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
		}

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
					// accept challenge button
					$(document).on("click", '.btn3', function() {

						alert("Hello, sir! \nIn deep regret, I'm not done in time. \nThis task of creating a game in PHP just.. isn't (in my head) something for PHP. \nA Task of the kind of a blog or the likes would've been purrfect.");

					});
				},
				error: function(data){
					console.log('Error: ', data);
				}
			});
		});

		return false;
	});

})
