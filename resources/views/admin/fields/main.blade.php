<div class="form-group @if($errors->get($field)) has-error @endif">
	<label for="{{ $field }}" class="control-label">{{ $name }}</label>

		@yield('field')
		@foreach($errors->get($field) as $message)
		<div class="control-label">{!! $message !!} Try another?</div>
		@endforeach

</div>