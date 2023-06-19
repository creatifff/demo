<header>
    <div class="container">
        <div class="header__inner">
            <a href="/">
                <div class="logo">
                    <img src="{{ asset('public/static/logo.png') }}" alt="logo">
                    <span>True<br>Games</span>
                </div>
            </a>
            <nav>
                <a href="/">О нас</a>
                <a href="#">Каталог</a>
                <a href="#">Где нас найти</a>
            </nav>
            <div class="btns">
                @guest
                    <a class="login-btn" href="{{ route('page.login') }}">Вход</a>
                    <a class="reg-btn" href="{{ route('page.register') }}">Регистрация</a>
                @endguest
                @auth
                    @if(auth()->user()->isAdmin())
                        <a class="login-btn" href="{{ route('admin.index') }}">Админ панель</a>
                    @else
                        <a class="login-btn" href="#">Кабинет</a>
                    @endif
                        <a class="reg-btn" href="{{ route('auth.logoutUser') }}">Выйти</a>
                @endauth
            </div>
        </div>
    </div>
</header>
