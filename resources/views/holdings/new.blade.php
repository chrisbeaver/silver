@extends('layouts.main')

@section('main-content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Stack Trackers Holding</h3>
            </div>
            <div class="panel-body">
            {!! Form::open(['url' => action('HoldingController@store')]) !!}
                {{ Form::hidden('user_id', auth()->user()->id) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Metal Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name for your holding']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('year', 'Year') !!}
                            {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => '1964']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('weight', 'Weight') !!}
                            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => '1.0']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('weight_unit', 'Unit') !!}
                            {!! Form::select('weight_unit', ['ounces' => 'Ounces', 'grams' => 'Grams'], null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            {!! Form::label('quantity', 'Quantity') !!}
                            {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => '2']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('finess', 'Finess') !!}
                            {!! Form::select('finess', [999 => '.999 Fine Silver', 980 => '.980 Mexico ca. 1930-45',
                                                        958 => '.958 Britannia', 950 => '.950 French 1st Standard',
                                                        925 => '.925 Seterling Silver', 900 => '90% Silver (US Coins 1792-1964)',
                                                        400 => '40% Silver'], null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('purchase_price', 'Purchase Price') !!}
                            {!! Form::text('purchase_price', null, ['class' => 'form-control', 'placeholder' => '125.45']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('purchase_currency', 'Unit') !!}
                            {!! Form::select('purchase_currency', ['usd' => 'US Dollars (USD)'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('purchase_date', 'Purchase Date') !!}
                            {!! Form::text('purchase_date', Carbon\Carbon::now()->format('m-d-Y'), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection