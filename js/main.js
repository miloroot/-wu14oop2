$(function() {

	console.log("Tis' working?");

	$('.btn1').click(function() {
		$.ajax({
			url: "index.php",
			data: "fight",
			dataType: "json",
			success: function(data){
				$('.battleground').append(data);
				console.log('Success:', data);
			},
			error: function(data){
				console.log('Error: ', data);
			}
		});
	});

	$('.createChar').submit(function() {
		var charName = $('.charName').val();
		var charClass = $('.chooseClass').val();

		console.log(charName + ' - ' + charClass);

		$('.confirmation').append('You chose the name: ' + charName + '.' + ' With the class: ' + charClass + '.<br>');
		$('.confirmation').append('If this is correct. Click the button. <br> <button class="btn2">Confirm!</button>');

		return false;
	});

})