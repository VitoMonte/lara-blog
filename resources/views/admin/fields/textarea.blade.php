@extends('admin.fields.main')

@section('field')
	<textarea class="form-control" name="{{ $field }}" rows="{{$rows or 3}}">{{ old($field ,(isset($entity) ? $entity->$field : '')) }}</textarea>
@overwrite