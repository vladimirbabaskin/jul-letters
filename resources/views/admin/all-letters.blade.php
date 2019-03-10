@extends("templates.admin.main")
@section("title", "All letters")
@section("content")
	<form action="{{ url('/admin/') }}"
	      method="post">
		{{ csrf_field() }}
		<p>
		<div>Название новости</div>
		<input name="title" type="text">
		</p>
		<p>
		<div>Текст новости</div>
		<textarea name="text"
		          id=""
		          cols="30"
		          rows="10"></textarea>
		</p>
		<p>
			<button>Добавить</button>
		</p>
	</form>
	@foreach ($letters as $letter)
		<h3>{{ $letter->title }}</h3>
		<p>{{ $letter->text }}</p>
		<!--  -->
		<form action="{{ url("/admin/$letter->id") }}"
		      method="post">
			{{ csrf_field() }}
			<p>
				<button name="id"
				        value="{{ $letter->id }}">Удалить
				</button>
			</p>
		</form>
		<!--  -->
		<form action="{{ url("/admin/letter/$letter->id") }}"
		      method="post">
			{{ csrf_field() }}
			<p>
				<button name="id"
				        value="{{ $letter->id }}">Редактировать
				</button>
			</p>
			<p>
				<input type="hidden"
				       name="title"
				       value="{{ $letter->title }}">
			</p>
			<p>
				<input type="hidden"
				       name="text"
				       value="{{ $letter->text }}">
			</p>
		</form>
	@endforeach
@endsection