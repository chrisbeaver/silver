@extends('layouts.main')

@section('main-content')
    {{ auth()->user()->email }}
@endsection