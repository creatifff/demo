@extends('layout.layout')

@section('title', 'Регистрация')

@section('content')
    <div class="short__section">
        <div class="container">
            <form action="{{ route('auth.createUser') }}" method="post" class="form">
                @csrf
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="name" placeholder="Имя" value="{{ old('name') }}">
                    </label>
                    @error('name')
                        <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="surname" placeholder="Фамилия" value="{{ old('surname') }}">
                    </label>
                    @error('surname')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="patronymic" placeholder="Отчество" value="{{ old('patronymic') }}">
                    </label>
                    @error('patronymic')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="login" placeholder="Логин" value="{{ old('login') }}">
                    </label>
                    @error('login')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="email" placeholder="Почта" value="{{ old('email') }}">
                    </label>
                    @error('email')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="password" name="password" placeholder="Пароль">
                    </label>
                    @error('password')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="password" name="password_repeat"
                               placeholder="Повторите пароль">
                    </label>
                    @error('password_repeat')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input type="checkbox" name="rules">
                        <span class="form__span">Согласен с правилами регистрации</span>
                    </label>
                    @error('rules')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <button class="form__btn" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection
