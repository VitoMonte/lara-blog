@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form class="form-signin" action="{{ route('password.email') }}" method="post">
                        {{ csrf_field() }}

                        @include('admin.fields.email', ['field'=>'email', 'name'=>'Email'])
                        @include('admin.fields.password', ['field'=>'password', 'name'=>'Password'])
                        <button class="btn btn-primary" type="submit" value="save">Save</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
