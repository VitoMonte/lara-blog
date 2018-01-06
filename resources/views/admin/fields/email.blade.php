@extends('admin.fields.main')

@section
	<input class="form-control" name="{{ $field }}" type="email" value="{{ old('field' ,(isset($entity) ? $entity->field : '')) }}">
@overwrite