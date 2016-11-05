@extends('layouts.main')

@section('main-content')
<div class="row">
    <div class="col-md-4 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
            {!! Form::open(['url' => action('AuthController@login')]) !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Username / Email', 'require', 'autofocus']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::submit('Login', ['class' => 'btn btn-primary pull-right']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>           
@endsection