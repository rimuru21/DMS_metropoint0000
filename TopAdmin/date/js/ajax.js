$(document).ready(function(){
	$('#date1');
	$('#date2');
	$('#btn_search').on('click', function(){	
		if($('#date1').val() == "" || $('#date2').val() == ""){
			alert("Please enter something on the text field");
		}else{
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
			$('#load_data').empty();
			$loader = $('<tr ><td colspan = "10"><center>Searching buses....</center></td></tr>');
			$loader.appendTo('#load_data');
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'get_bus.php',
					type: 'POST',
					data: {
						date1: $date1,
						date2: $date2
					},
					success: function(res){
						$('#load_data').html(res);
					}
				});
			}, 3000);
		}	
	});
	
	$('#reset').on('click', function(){
		location.reload();
	});
});


$(document).ready(function(){
	$('#date1');
	$('#date2');
	$('#btn_search1').on('click', function(){	
		if($('#date1').val() == "" || $('#date2').val() == ""){
			alert("Please enter something on the text field");
		}else{
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
			$('#load_data').empty();
			$loader = $('<tr ><td colspan = "10"><center>Searching trips....</center></td></tr>');
			$loader.appendTo('#load_data');
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'get_trip.php',
					type: 'POST',
					data: {
						date1: $date1,
						date2: $date2
					},
					success: function(res){
						$('#load_data').html(res);
					}
				});
			}, 3000);
		}	
	});
	
	$('#reset1').on('click', function(){
		location.reload();
	});
});

