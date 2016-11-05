@extends('layouts.main')

@section('main-content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
            {!! Form::open(['url' => action('AuthController@login')]) !!}
                {{ Form::hidden('user_id', auth()->user()->id) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Metal Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name for your holding']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('weight', 'Weight') !!}
                            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => '1.0']) !!}
                        </div>
@endsection