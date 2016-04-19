<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('index') }}">Post-it!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
             @if(!Auth::check())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
            @endif
            @if(Auth::check())
                <li><a href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                <li><a href="{{ route('admin.quotes') }}">Quotes</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
