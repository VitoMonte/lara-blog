@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        @include('admin.fields.email', ['field'=>'email', 'name'=>'Email'])

                        @include('admin.fields.password', ['field'=>'password', 'name'=>'Password'])

                        @include('admin.fields.checkbox', ['field'=>'remember', 'name'=>'Remember Me'])

                        <button class="btn btn-primary" type="submit" value="save">Login</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
