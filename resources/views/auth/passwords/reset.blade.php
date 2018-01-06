@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">

                <form class="form-signin" action="{{ route('password.request') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        @include('admin.fields.email', ['field'=>'email', 'name'=>'Email'])
                        @include('admin.fields.password', ['field'=>'password', 'name'=>'Password'])
                        @include('admin.fields.password', ['field'=>'password_confirmation', 'name'=>'Confirm Password'])
                        <button class="btn btn-primary" type="submit" value="save">Reset Password</button>                        
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
