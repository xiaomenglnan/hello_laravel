
@extends('app')
@section('content')
	<hr>
	<h2>{{$article->title}}</h2>
	<article>
		<div class="body">
			{{$article->content}}
		</div>
	</article>
@stop