<!doctype html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport"
		      content="width=device-width, initial-scale=1.0">
		<meta http-equiv="x-ua-compatible"
		      content="ie=edge">
		<!-- Title -->
		<title>@yield("title", "Title") | Admin</title>
		<!-- Font Awesome -->
		<link rel="stylesheet"
		      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
		      crossorigin="anonymous">
		<!-- Bootstrap -->
		<link rel="stylesheet"
		      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		      crossorigin="anonymous">
		<link rel="stylesheet"
		      href="{{ asset("/css/main.css") }}">
		{{--		      href="/css/main.css">--}}
	</head>
	<body>
		@yield("content")
		{{--		@yield("title", "Title")--}}
		{{--	    @section("title", "All letters")--}}
		{{--	    @section("title")--}}
		{{--	    @endsection--}}
	</body>
</html>