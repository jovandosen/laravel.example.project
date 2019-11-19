@extends('layouts.app')

@section('content')

	<h1>Post:</h1>

	<form method="post" action="{{ route('testing') }}" enctype="multipart/form-data"> 
		<div>
			<input type="text" name="title" id="title" value="{{ old('title') }}" autocomplete="off" placeholder="Enter post title..." />
			@if( $errors->has('title') )
				<font color="red">{{ $errors->first('title') }}</font>
			@endif
		</div>
		<div>
			<input type="text" name="content" value="{{ old('content') }}" autocomplete="off" placeholder="Enter post content..." />
			@if( $errors->has('content') )
				<font color="red">{{ $errors->first('content') }}</font>
			@endif
		</div>
		<div>
			<input type="file" name="file" />
			@if( $errors->has('file') )
				<font color="red">{{ $errors->first('file') }}</font>
			@endif	
		</div>
		<div>
		<input type="submit" name="submit" value="Submit" />	
		</div>
		@csrf	
	</form>

@endsection