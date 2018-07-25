<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Patient Appointment System</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		<div class="container">
			<h2>Edit</h2><br>
			<form method="post" action="{{action('PatientController@update', $id)}}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Name">Name:</label>
						<input type="text" name="name" class="form-control" value="{{$patient->name}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Email">Email:</label>
						<input type="text" name="email" class="form-control" value="{{$patient->email}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="Number">Phone Number:</label>
						<input type="text" name="number" class="form-control" value="{{$patient->number}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label>Hospital Branch:</label>
						<select name="office">
							<option value="Dhaka" @if($patient->office=="Dhaka") selected @endif>Dhaka</option>
							<option value="Rajshahi" @if($patient->office=="Rajshahi") selected @endif>Rajshahi</option>
							<option value="Chattogram" @if($patient->office=="Chattogram") selected @endif>Chattogram</option>
							<option value="Khulna" @if($patient->office=="Khulna") selected @endif>Khulna</option>
							<option value="Barishal" @if($patient->office=="Barishal") selected @endif>Barishal</option>
							<option value="Sylhet" @if($patient->office=="Sylhet") selected @endif>Sylhet</option>
							<option value="Mymensingh" @if($patient->office=="Mymensingh") selected @endif>Mymensingh</option>
							<option value="Rangpur" @if($patient->office=="Rangpur") selected @endif>Rangpur</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4" style="margin-top: 60px;">
						<button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>

<!-- edit.blade.php -->
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('PatientController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$patient->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$patient->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$patient->number}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Hospital Branch</lable>
                <select name="office">
                  <option value="Dhaka"  @if($patient->office=="Dhaka") selected @endif>Dhaka</option>
                  <option value="Rajshahi"  @if($patient->office=="Rajshahi") selected @endif>Rajshahi</option>
                  <option value="Chattogram" @if($patient->office=="Chattogram") selected @endif>Chattogram</option>  
                  <option value="Khulna" @if($patient->office=="Khulna") selected @endif>Khulna</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
 -->