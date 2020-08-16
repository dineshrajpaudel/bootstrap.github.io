<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-6"><br>

			<input type="" id="name" class="form-control form-control-sm">
			<p id="counter">0</p>
			<button id="clickme" class="btn btn-sm btn-success">
				Click Me
			</button>
		</div>
		<div class="col-6">
			<h4 class="text-center">Results</h4>
			<hr>
			<ol id="counter_result">
				
			</ol>
		</div>
	</div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script >
	var counter=0;
	$('#clickme').click(function(){
		counter++;
		$('#counter').html(counter);
		if(counter==1){
			setTimeout(function(){
		     alert(counter);
		     var name = $('#name').val();
		     $('#counter_result').append('<li> &nbsp;'+name+'&nbsp;&nbsp; '+counter+'</li>')
		     counter=0;
			$('#counter').html(counter);


	         },5000);
		}
	});
	
</script>
</body>
</html>