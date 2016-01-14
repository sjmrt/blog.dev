@extends('layouts.master')

@section('content')
    <h1> You rolled a  {{{$guess}}}, the computer rolled a {{{ $roll }}}. </h1>

    @if ($roll == $guess)
    	<h2> You are right! </h2>
    @else
    	<h2> You are wrong! </h2>
    @endif

@stop
