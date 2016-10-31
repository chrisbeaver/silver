@extends('layouts.main')

@section('main-content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">mySilver Registration</h3>
            </div>
            <div class="panel-body">
            <form method="POST" action="{{ action('SignupController@store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label for="epassword">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password" />
                </div>
              
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection