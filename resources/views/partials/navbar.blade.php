<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item is-brand is-tab" href="#">
              <img src="/images/navbar_logo.png" alt="Bulma logo">
            </a>
        </div>

    {{-- <div class="nav-center">
        <a class="nav-item" href="#">
            <span class="icon">
                <i class="fa fa-github"></i>
            </span>
        </a>
        <a class="nav-item" href="#">
            <span class="icon">
              <i class="fa fa-twitter"></i>
            </span>
        </a>
    </div> --}}

    <span id="nav-toggle" class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>

    <div id="nav-menu" class="nav-right nav-menu">
        <a class="nav-item is-tab" href="#">
            Home
        </a>
        <a class="nav-item is-tab" href="#">
            Documentation
        </a>
        <a class="nav-item is-tab" href="#">
          Blog
        </a>

      <span class="nav-item is-tab">
          @if(auth()->check())
              <a class="button" >
                  <span class="icon">
                      <i class="fa fa-database"></i>
                  </span>
                  <span>My Stack</span>
              </a>
              <a class="button is-primary" href="">
                  <span>{{ auth()->user()->username }}</span>
                  <span class="icon">
                      <i class="fa fa-user"></i>
                  </span>
              </a>
          @else
              <a class="button is-primary" href="{{ action('AuthController@showLoginForm') }}">
                  <span>Login</span>
                  <span class="icon">
                      <i class="fa fa-sign-in"></i>
                  </span>
              </a>
          @endif
      </span>
    </div>
  </div>
</nav>