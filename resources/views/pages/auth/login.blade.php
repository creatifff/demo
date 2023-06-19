@extends('layout.layout')

@section('title', 'Вход')

@section('content')
    <div class="short__section">
        <div class="container">
            <form action="{{ route('auth.loginUser') }}" method="post" class="form">
                @csrf
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
                        <input class="form__input" type="password" name="password" placeholder="Пароль">
                    </label>
                    @error('password')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                @error('invalid')
                <p class="invalid-error">{{ $message }}</p>
                @enderror
                <button class="form__btn" type="submit">Войти</button>
            </form>
        </div>
    </div>
@endsection
