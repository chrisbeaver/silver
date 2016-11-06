@extends('layouts.main')

@section('main-content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add Images for {{ $holding->name }}</h3>
        </div>
        <div class="panel-body">
            <form action="/holdings/images" method="POST" class="dropzone" id="holdings-images">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection