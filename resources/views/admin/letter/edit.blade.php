@extends("templates.admin.main")
@section("title", "Edit")
@section("content")

	<form action="{{ url("/admin/$letter->id") }}"
	      method="post">
		<input type="hidden"
		       name="_method"
		       value="put">
		<input type="hidden"
		       name="_token"
		       value="{{ csrf_token() }}">
{{--		{{ method_field('put') }}--}}
{{--		{{ csrf_field() }}--}}
		<p>
			<input type="text"
			       name="title"
			       value="{{ $letter->title }}">
		</p>
		<p>
			<textarea name="text"
			          id=""
			          cols="30"
			          rows="10">{{ $letter->text }}</textarea>
		</p>
		<p>
			<button>Save</button>
		</p>
	</form>
@endsection