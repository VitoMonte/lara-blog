@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8 col-offset-2">
      <div class="panel panel-default">
        @if(empty($entity))
          <div class="panel-heading">Create new category</div>
        @else
          <div class="panel-heading">Edit category</div>
        @endif
          <div class="panel-body">
            <form class="form-signin" action="@if(empty($entity)){{ route('categories.store') }} @else {{ route('categories.update', $entity->id) }} @endif" method="post">
              {{ csrf_field() }}
              @isset($entity)
                {{ method_field('PUT') }}
              @endisset
              
                <h2 class="form-signin-heading">{{$entity->title or 'Новая категория'}}</h2>
                @include('admin.fields.text', ['field'=>'title', 'name'=>'Title'])
                @include('admin.fields.text', ['field'=>'slug', 'name'=>'Slug'])
                
              
              <button class="btn btn-lg btn-primary btn-block" type="submit" value="save">Save</button>
            </form>
          </div>
      </div>
    </div>
  </div>





@endsection