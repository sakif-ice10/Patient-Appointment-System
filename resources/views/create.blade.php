<!-- create.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Patient Appointment System</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Patient Appointment System</h2><br>
			<form method="post" action="{{url('patients')}}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Name">Name:</label>
						<input type="text" name="name" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Email">Email:</label>
						<input type="text" name="email" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Number">Phone Number:</label>
						<input type="text" name="number" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<input type="file" name="filename">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Date">Date:</label>
						<input id="datepicker" type="text" name="date" class="date form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Date">Hospital Branch:</label>
						<select name="office">
							<option value="Dhaka">Dhaka</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Chattogram">Chattogram</option>
							<option value="Khulna">Khulna</option>
							<option value="Barishal">Barishal</option>
							<option value="Sylhet">Sylhet</option>
							<option value="Mymensingh">Mymensingh</option>
							<option value="Rangpur">Rangpur</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4" style="margin-top: 60px;">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript">
			$('#datepicker').datepicker({
				autoclose: true,
				format: 'dd-mm-yyyy'
			});
		</script>
	</body>
</html>