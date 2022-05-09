<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{  route('grape.index')}}" class="nav-link">{{__('Grapes')}}</a></li>
        <li class="nav-item"><a href="{{ route('place.index')}}" class="nav-link">{{__('Places')}}</a></li>
        <li class="nav-item"><a href="{{ route('winetype.index')}}" class="nav-link">{{__('Wine types')}}</a></li>
        <li class="nav-item"><a href="{{ route('wine.index')}}" class="nav-link">{{__('Wines')}}</a></li>
      </ul>

      @auth
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
                <a class="dropdown-item" href="#">
                    {{ __('Profile') }}
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" type="submit">
                        {{ __('Sign out') }}
                    </button>
                </form>
            </li>
        </ul>
      </div>
      @else
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">
        {{ __('Sign in') }}
      </a>
      <a class="btn btn-sm btn-success ms-3" href="{{ route('register') }}">
        {{ __('Sign up') }}
      </a>
      @endauth
      
    </header>
  </div>