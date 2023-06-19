@extends('layout.layout')

@section('title', 'Добавить категорию')

@section('content')
    <div class="short__section">
        <div class="container">
            <form action="{{ route('admin.createCategory') }}" method="post" class="form">
                @csrf
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="name" placeholder="Название категории"
                               value="{{ old('name') }}">
                    </label>
                    @error('name')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <button class="form__btn" type="submit">Добавить</button>
            </form>
        </div>
    </div>
@endsection
