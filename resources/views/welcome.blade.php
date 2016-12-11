@extends('layouts.main')

@section('main-content')
<section class="hero">
    <div class="hero-body"> 
        <div class="container"> 
            <h1 class="title rubberBand animated has-text-centered" style="font-size: 48px; color: #4D545D;">
                The <strong>easiest</strong> way to track your stack!
            </h1>
            <div class="columns">
                <div class="column is-third is-offset-one-third">
                    <a class="button is-outlined is-primary" href="{{ action('SignupController@index') }}">Start Building Your Stack</a>
                    &nbsp;
                    &nbsp;
                    <a class="button is-outlined is-info" href="{{ action('SignupController@index') }}">Browse Stacks</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        This is a section.
    </div>
</section>
@endsection