@extends("templates.user.main")
@section("title", "All letters")
@section("content")
	@foreach ($letters as $letter)
		<h3>{{ $letter->title }}</h3>
		<p>{{ $letter->text }}</p>
	@endforeach
@endsection