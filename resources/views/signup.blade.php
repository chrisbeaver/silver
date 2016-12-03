@extends('layouts.main')

@section('main-content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Stack Trackers Registration</h3>
            </div>
            <div class="panel-body">
            {!! Form::open(['url' => action('SignupController@store')]) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email Address') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'yourname@domain.com']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('username', 'Username') !!}
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                </div>
              
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection