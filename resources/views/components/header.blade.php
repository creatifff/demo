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
                <a class="login-btn" href="{{ route('page.login') }}">Вход</a>
                <a class="reg-btn" href="{{ route('page.register') }}">Регистрация</a>
            </div>
        </div>
    </div>
</header>
