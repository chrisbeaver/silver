<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-left" href="#"><img src="/images/navbar_logo.png" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stacks <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add To Your Stack</a></li>
                        <li><a href="#">Browse Stacks</a></li>
                        {{-- <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li> --}}
                    </ul>
                </li>
            <li><a href="#">Trading Post</a></li>
            </ul>
          
            <ul class="nav navbar-nav navbar-right">
            {{-- <li><a href="#"></a></li> --}}
                @if(auth()->guest())
                    <li><a href="{{ action('AuthController@login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="text-center"><h3>{{ auth()->user()->username}}</h3></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Your Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="{{ action('AuthController@logout') }}">Sign Out</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>