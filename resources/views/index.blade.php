<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

	<div class="container">
		<h2>Appointment List</h2>
		<br>
		@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>
					{{Session::get('success')}}
				</p>
			</div><br>
		@endif

		<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Date</td>
					<td>Email</td>
					<td>Phone Number</td>
					<td>Hospital Branch</td>
					<td colspan="2">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($patients as $patient)
					@php
						$date = date('Y-m-d', $patient['date']);
					@endphp
					<tr>
						<td>{{$patient['id']}}</td>
						<td>{{$patient['name']}}</td>
						<td>{{$date}}</td>
						<td>{{$patient['email']}}</td>
						<td>{{$patient['number']}}</td>
						<td>{{$patient['office']}}</td>
						<td>
							<a href="{{action('PatientController@edit', $patient['id'])}}" class="btn btn-warning">
								Edit
							</a>
						</td>
						<td>
							<form action="{{action('PatientController@destroy', $patient['id'])}}" method="post">
								@csrf
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger" type="submit">Delete</button>
								
							</form>
						</td>
					</tr>
					
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>