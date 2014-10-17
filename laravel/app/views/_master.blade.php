<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','DWA-15')</title>
	<meta charset='utf-8'>
<!--    From BOotstrap lynda.com tutorial:-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!--  END OF BOOTSTRAP CDN -->
    
	@yield('header')
	
</head>
<body>
    <!--    Include a header common to all pages:-->
    <?php include("../app/views/header.php") ?>
    
<!--	<img src='images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'>-->
	@yield('content')

	@yield('body')
	
</body>
</html>