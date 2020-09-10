    <header>
        
            <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script> 
        
        
        <nav class="navbar navbar-expand-lg navbar-dark indigo">
          <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name') }}</a>
          
         <!-- <ul class="navbar-nav ml-auto">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              @endif
              @else
              
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </li>
              @endguest
          </ul> -->
          
        </nav>
        
    </header>