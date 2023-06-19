@extends('layout.layout')

@section('title', 'Добавить товар')

@section('content')
    <div class="short__section">
        <div class="container">
            <form action="{{ route('admin.product.createProduct') }}" method="post" class="form"
                  enctype="multipart/form-data">
                @csrf
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="name" placeholder="Название"
                               value="{{ old('name') }}">
                    </label>
                    @error('name')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="number" min="2001" max="2023" name="year"
                               placeholder="Год выпуска" value="{{ old('year') }}">
                    </label>
                    @error('year')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="price" placeholder="Цена"
                               value="{{ old('price') }}">
                    </label>
                    @error('price')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="text" name="country" placeholder="Страна производства"
                               value="{{ old('country') }}">
                    </label>
                    @error('country')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input class="form__input" type="file" name="image_path">
                    </label>
                    @error('image_path')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label for="category-select"></label>
                    <select id="category-select" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input__col">
                    <label>
                        <input type="checkbox" checked name="is_published">
                        <span class="form__span">Опубликовать товар</span>
                    </label>
                    @error('rules')
                    <p class="invalid-error">{{ $message }}</p>
                    @enderror
                </div>
                <button class="form__btn" type="submit">Добавить</button>
            </form>
        </div>
    </div>
@endsection
