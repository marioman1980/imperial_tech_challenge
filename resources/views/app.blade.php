<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>    
    <title>{{ config('app.name') }}</title>
    <style>
    body{
    	padding: 10 50 0 50;
    }
    </style>

</head>
<body>
	<div id="container">
		@yield('content')
	</div>
</body>
</html>
