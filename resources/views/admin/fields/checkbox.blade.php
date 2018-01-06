@extends('admin.fields.main')

@section('field')
		<input type="checkbox" name="{{ $field }}" value="{{ old($field ,(isset($entity) ? $entity->$field : '')) }}"> {{ old($field ,(isset($entity) ? $entity->$field : '')) }}
@overwrite