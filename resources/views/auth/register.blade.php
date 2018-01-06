@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        @include('admin.fields.text', ['field'=>'name', 'name'=>'Name'])
                        @include('admin.fields.email', ['field'=>'email', 'name'=>'E-Mail Address'])
                        @include('admin.fields.password', ['field'=>'password', 'name'=>'Password'])
                        @include('admin.fields.password', ['field'=>'password_confirmation', 'name'=>'Confirm Password'])
                        <button class="btn btn-primary" type="submit" value="save">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
