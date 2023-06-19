@extends('layout.layout')

@section('title', 'Админ панель')

@section('content')
    <div class="short__section">
        <div class="container">
            <h1>Admin panel</h1>
            <a class="login-btn" href="{{ route('admin.createProduct') }}">Добавить товар</a>
            <a class="login-btn" href="{{ route('admin.addCategory') }}">Добавить категорию</a>

            <div>
                <span>Товары</span>
                <a href="{{ route('admin.index', ['sort_by' => 'name']) }}">По наименованию</a>
                <a href="{{ route('admin.index', ['sort_by' => 'year']) }}">По году производства</a>
                <a href="{{ route('admin.index', ['sort_by' => 'price']) }}">По цене</a>

                @foreach($products as $product)
                    <div style="display: flex; flex-direction: row; align-items: center; gap: 10px">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->price }}</p>
                        <img style="width: 100px; height: 100px; object-fit: contain" src="{{ $product->imageUrl() }}"
                             alt="{{ $product->name }}">
                        <form
                            action="{{ route('admin.product.deleteProduct', $product->id) }}"
                            method="post"
                        >
                            @csrf
                            @method('DELETE')
                            <button class="admin-delete-btn" type="submit">Удалить</button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div>
                <span>Категории</span>
                <a href="{{ route('admin.index', ['sort_by' => 'name']) }}">По дате создания</a>
                @foreach($categories as $category)
                    <div style="display: flex; flex-direction: row; align-items: center; gap: 10px">
                        <h5>{{ $category->name }}</h5>
                        <p>{{ $category->created_at }}</p>
                        <form class="delete-product-form" action="{{ route('admin.deleteCategory', $category->id) }}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="admin-delete-btn" type="submit">Удалить</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
