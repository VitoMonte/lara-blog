@extends('layouts.app')

@section('content')


@if($categories->count() > 0)

	<ol>
		@foreach($categories as $category)
		<li>
			<ul>
				<li>category->id: {{ $category->id }}</li>
				<li>category->title: {{ $category->title }}</li>
				<li>ategory->posts->count: {{ $category->posts->count() }}</li>
				<li>
					<form action="{{ route('categories.destroy', $category->id) }}" method="post">
						<a type="btn" class="btn btn-default" href="{{ route('categories.edit', $category->id) }}">редактировать</a>
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button type="submit" class="btn btn-danger">delete</button>
					</form>
				</li>
			</ul>
		</li>
		@endforeach

	</ol>



@else

	No categories

@endif

@endsection