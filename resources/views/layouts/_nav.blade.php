<nav class="navbar fixed-top navbar-expand-lg" id="navbar">

    <button class="navbar-toggler bg-info text-white" type="button" data-toggle="collapse" style="width: 100%"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation"><i class="fas fa-bars" style="margin-left: 3rem;"></i>
        <span class="navbar-toggler-icon mr-3"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a href="/" class="btn btn-primary active" role="button" aria-pressed="true" id="startButton">Начало H&H</a>
        <div class="dropdown show">
            <a class="btn btn-primary dropdown-toggle" href="/" role="button" id="dropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Изберете изкуство
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Квилинг</a>
                <a class="dropdown-item" href="#">Плетени на Една кука</a>
                <a class="dropdown-item" href="#">Плетени на Две куки</a>
                <a class="dropdown-item" href="#">Живопис</a>
                <a class="dropdown-item" href="#">Декупаж</a>
                <a class="dropdown-item" href="#">Щамповани</a>
                <a class="dropdown-item" href="#">Дигитални</a>
                <a class="dropdown-item" href="#">Други</a>
            </div>
        </div>


        @auth
        <div class="dropdown show mr-auto">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
        
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                <a class="dropdown-item" href="{{route('profiles.show', ['profile' => auth()->id()])}}">Моят Профил</a>
                <a class="dropdown-item" href="#">Настройки</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Изход
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @else
        <ul class="navbar-nav mr-auto">
            <li class="nav-link"><a href="{{ route('login') }}" class="btn btn-primary  active" role="button"
                  aria-pressed="true"><i class="fas fa-sign-in-alt mr-3"></i>Влезте
                  в акаунта си</a></li>

            <li class="nav-link"><a href="{{ route('register') }}" class="btn btn-primary  active" role="button"
                  aria-pressed="true"><i class="fas fa-user-plus mr-3"></i>Регистрирайте се</a></li>
        </ul>
        @endauth

    </div>
    <form class="form-inline row">
        <input class="form-control ml-4 ml-md-auto mt-2 mb-2 mr-md-2 col-8" type="search" placeholder="Търсене..." aria-label="Search" name="search">
        <button id="searchButton" class="btn btn-secondary ml-2 ml-md-0 mr-md-4" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</nav>