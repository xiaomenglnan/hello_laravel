@extends('app')
@section('content')
<h1>About me</h1>
<h3>People I admire</h3>
@if(count($people)>0)
<ul>
	@foreach($people as $person)
	<li>{{$person}}</li>
	@endforeach
</ul>
@endif
@stop