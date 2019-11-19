@extends('layouts.app')

@section('content')

	<h4>Posts:</h4>

	<ul>
		@foreach( $posts as $post )
			<li>Title: {{ $post->title }}</li>
		@endforeach
	</ul>

	@include('part')

@endsection