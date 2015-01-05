$(function() {

	console.log("Tis' working?");

	$('.btn1').click(function() {
		$.ajax({
			url: "index.php",
			data: "fight",
			dataType: "json",
			success: function(data){
				$('body').append(data);
				console.log('Success:', data);
			},
			error: function(data){
				console.log('Error: ', data);
			}
		});
	});

})