<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		{{env('APP_NAME')}} MAIL
	</title>
	  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
	  <style type="text/css">
	  	body{
	  		background-color: #F2F2F2;
	  	}
	  	.card{
	  		margin-top: 100px;
	  	}
	  </style>
</head>
<body>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="card p-md-4 p-sm-4 p-lg-4" style="padding-bottom: 50px;">
			<h1 class="text-center">Email Confirmation </h1>
		    <div class="row">
		   	<div class="col-sm-5"></div>
		   	<div class="col-sm-2">
		   		<a href="{{route('confirm-mail')}}?confirmation_code={{$user->verification_code}}" class="btn btn-outline-success btn-rounded">Active Acount</a>
		   	</div>
		   	<div class="col-sm-5"></div>

		   </div>
			
		</div>
	</div>
	<div class="col-md-2"></div>
</div>


</body>
</html>