<!DOCTYPE html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
	@extends('layouts.master')

	@section('content')
	    <h1>Hello, {{{$name}}}!</h1>
	@if($name == 'SJ')
		<h2> wtg </h2>
	@endif

	@stop
</body>
</html>