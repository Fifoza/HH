<nav class="mi-navbar">
    <input type="checkbox" id="hamburger-button">
    <label id="hamburger" for="hamburger-button">
        <div></div>
        <div></div>
        <div></div>
    </label>
    <ul>
        <li>
            <a href="/" class="mi-btn-nav" role="button">Начало</a>
        </li>

        <li>
            <button class="mi-dropdown-nav">
                Изберете изкуство
                <i class="fa fa-caret-down"></i>
                <div class="mi-dropdown-content-nav">
                    <a href="#">Квилинг</a>
                    <a href="#">Плетени на Една кука</a>
                    <a href="#">Плетени на Две куки</a>
                    <a href="#">Живопис</a>
                    <a href="#">Декупаж</a>
                    <a href="#">Щамповани</a>
                    <a href="#">Дигитални</a>
                    <a href="#">Сувенири</a>
                    <a href="#">Други</a>
                </div>
            </button>
        </li>

        <li>
            <button class="mi-dropdown-nav">
                Тематични артикули
                <i class="fa fa-caret-down"></i>
                <div class="mi-dropdown-content-nav">
                    <a href="#">Рожден ден/Имен ден</a>
                    <a href="#">Сватба</a>
                    <a href="#">Изписване/Кръщене на дете</a>
                    <a href="#">Детски артикули/играчки</a>
                    <a href="#">Баба Марта</a>
                    <a href="#">Трифон Зарезан/Св. Валентин</a>
                    <a href="#">Хелоуин</a>
                    <a href="#">Коледа</a>
                    <a href="#">Други</a>
                </div>
            </button>
        </li>

        @auth
        <li>
            <button class="mi-dropdown-nav">{{auth()->user()->name}}
                <i class="fa fa-caret-down"></i>
                <div class="mi-dropdown-content-nav">
                    <a href="{{route('profiles.show', ['profile' => auth()->id()])}}">Моят Профил</a>
                    <a href="#">Настройки</a>
                </div>
            </button>
        </li>

        <li>
            <a class="mi-btn-nav" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Изход</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        
        <li>
            <div>
                <a class="mi-btn-nav" href="{{route('profiles.creativities.create', ['profile' => auth()->id()])}}">Качи нова творба</a>
            </div>
        </li>


        @else

        <li>
            <a class="mi-btn-nav" href="{{ route('login') }}" role="button"><i class="fas fa-sign-in-alt"></i>
            Вход</a>
        </li>

        <li>
            <a class="mi-btn-nav" href="{{ route('register') }}" role="button"><i class="fas fa-user-plus"></i>
            Регистрация</a>
        </li>
        @endauth

        <li>
            <form>
                <input class="mi-search-input-nav" type="search" placeholder="Търсене..." name="search">
                <button class="mi-search-button-nav" type="submit">
                    <span>&#x2315;</span>
                </button>
            </form>
        </li>
    </ul>
</nav>