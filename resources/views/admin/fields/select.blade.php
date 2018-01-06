@extends('admin.fields.main')

@section('field')
	<select class="form-control" name="{{ $field }}">
	@foreach($options as $item)
		<option value="{{$item['id']}}">{{ $item['title']}}</option>
	@endforeach
	</select>
@overwrite
