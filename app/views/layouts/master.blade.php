<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/css/style.css">

@yield('top-script')

</head>
<body>
    @yield('content')
    @if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

    @yield('bottom-script')

    <script src="/js/jquery-1.11.3.js"></script>
   	<script src="/js/bootstrap.min.js"></script>
</body>
</html>