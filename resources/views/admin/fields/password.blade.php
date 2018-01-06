@extends('admin.fields.main')

@section('field')
	<input type="password" class="form-control" name="{{ $field }}" value="{{ old($field ,(isset($entity) ? $entity->$field : '')) }}" >
@overwrite