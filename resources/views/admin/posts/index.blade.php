@extends('layouts.app')

@section('content')


@if($posts->count() > 0)

	<ol>
		@foreach($posts as $post)
		<li>
			<ul>
				<li>post->id: {{ $post->id }}</li>
				<li>post->title: {{ $post->title }}</li>
				<li>posts->count: {{ $post->count() }}</li>
				<li>
					<form action="{{ route('posts.destroy', $post->id) }}" method="post">
						<a type="btn" class="btn btn-default" href="{{ route('posts.edit', $post->id) }}">редактировать</a>
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

	No posts

@endif

@endsection