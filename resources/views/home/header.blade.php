
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img src="home/assets/img/logo.png" class="height: 200px  " alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    @foreach ($menu as $item)
                        <li class="nav-item"><a class="nav-link" href="{{$item->link}}">{{$item->name}}</a></li>
                        
                       
                        @endforeach

                        
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item"><a class="btn btn-primary" href="{{url('/redirect')}}">Dashboard</a></li>
                        @else
                        <li class="nav-item"><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="btn btn-primary" href="{{ route('register') }}">Register</a></li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>