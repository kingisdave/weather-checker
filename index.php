<!DOCTYPE html>
<html>
<head>
	<title>My Webpage</title>
	<meta charset="utf-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../bootstrap-4.3.1/dist/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../bootstrap-4.3.1/dist/js/bootstrap.js"></script>
	
	<style>

		html, body {
			height: 100%;
		}
		.container-fluid{
			background-image: url("background.jpg");
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center; 
			padding-top: 100px;
			opacity: 0;
		}
		.center{
			text-align: center;
		}

		.white{
			color: white;
		}
		p {
			padding-top: 15px;
			padding-bottom: 15px;
		}
		button{
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.alert{
			margin-top: 20px;
			display: none;
		}
	</style> 
</head>
<body>
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-6 col-md-offset-3 mx-auto">

				<h1 class="center white">Weather Predictor</h1>

				<p class="text-lead center white">Enter your city below to get a forecast for the weather</p>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Franscisco...">
					</div>
					<div class="form-group text-center">
						<button class="btn btn-success btn-lg">Check My Weather</button>
					</div>
				</form>

				<div id="success" class="alert alert-success">Success</div>
				<div id="fail" class="alert alert-danger">Could not find data for that city, Please try again</div>
				<div id="nocity" class="alert alert-danger">Please enter a city</div>
			</div>
		</div>
	</div>
	<script>
		$("#findWeather").click(function(e){
			$(".alert").hide();
			e.preventDefault();
			if ($("#mycity").val() !="") {
				$.get("checker.php?mycity="+$("#mycity").val(), function( data ) {
					
					if (data=="") {
						$("#fail").fadeIn();
					} else {
						$("#success").html(data).fadeIn();
					}
				});

			} else{
				$("#nocity").fadeIn();
			}
		});
	</script>

</body>
</html>