@extends('layout.layout')

@section('title', 'Регистрация')

@section('content')
    <div class="short__section">
        <div class="container">
            <form action="" method="post" class="form">
                @csrf
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="name" placeholder="Имя">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="surname" placeholder="Фамилия">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="patronymic" placeholder="Отчество">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="login" placeholder="Логин">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="email" placeholder="Почта">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="password" name="password" placeholder="Пароль">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="password" name="password_repeat"
                               placeholder="Повторите пароль">
                    </label>
                </div>
                <div class="input__col">
                    <label>
                        <input type="checkbox" name="rules">
                        <span class="form__span">Согласен с правилами регистрации</span>
                    </label>
                </div>
            </form>
        </div>
    </div>
@endsection
