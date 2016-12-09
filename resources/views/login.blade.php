@extends('layouts.main')

@section('main-content')
<div class="columns" style="margin-bottom: 240px;">
    <div class="column is-one-third is-offset-one-third">
        <div class="card is-fullwidth">
            <header class="card-header">
                <p class="card-header-title">
                    Login
                </p>
            </header>
            <div class="card-content">
                {!! Form::open(['url' => action('AuthController@login')]) !!}
                
                    <label class="label">Email</label>
                    <p class="control">
                        <input name="email" class="input is-success" type="email" placeholder="name@email.com" required autofocus />
                    </p>
                             
                    <label class="label">Password</label>
                    <p class="control">
                        <input name="password" class="input is-success" type="password" placeholder="name@email.com" required autofocus />
                    </p>
                    
                    <button type="submit" class="button is-primary">Login</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>        
@endsection