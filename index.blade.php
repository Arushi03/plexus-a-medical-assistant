<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	@include('hospitall.client.layouts.nav')

	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

</head>
<body style="background-image: url('http://www.munsonhealthcare.org/upload/MediaGallery/Albums/101/Items/28231HomepageGraphics_CAD_ER.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="container">
	@if(session('success'))
		<div class="alert alert-warning">

			{{session('success')}}
		</div>
	@endif
	<br>
<div align="center">
 <h1 style="font-family: 'Roboto Slab', serif;
color: midnightblue ; " ><b>A MEDICAL ASSISTANT FOR YOU</b></h1>
 <p style="font-size: 20px;" class=""><b>Fast. Friendly. Accurate. <br>For all patients.</b></p>
 </div>
 <div class="container">
 @include('hospitall.client.layouts.timetable');
  
</div>
</body>
</html>