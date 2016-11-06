@extends('layouts.main')

@section('main-content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add Images</h3>
        </div>
        <div class="panel-body">
            <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
        </div>
    </div>
</div>
@endsection