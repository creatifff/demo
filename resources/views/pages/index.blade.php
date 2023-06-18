@extends('layout.layout')

@section('title', 'О нас')

@section('content')
    <section class="short__section">
        <div class="container">
            <div class="about-us__content">
                <div class="about-us__text">
                    <h1>True Games</h1>
                    <h2>Не просто игровые приставки, <br> а ваш ключ к виртуальной <br> реальности!</h2>
                    <a class="about-us__btn" href="#">Перейти в каталог</a>
                </div>
                <div class="about-us__slider">
                    <div class="slider__title">Новинки магазина</div>
                    <div class="slider">
                        <div class="slider-line">
                            <div class="slide">
                                <img src="{{ asset('public/static/slide-item1.png') }}" alt="slide">
                                <p class="product-name">Playstation 4</p>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('public/static/slide-item2.png') }}" alt="slide 2">
                                <p class="product-name">Playstation 5</p>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('public/static/slide-item3.png') }}" alt="slide 3">
                                <p class="product-name">Xbox Series X</p>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('public/static/slide-item4.png') }}" alt="slide 4">
                                <p class="product-name">Xbox Series S</p>
                            </div>
                            <div class="slide">
                                <img src="{{ asset('public/static/slide-item5.png') }}" alt="slide 5">
                                <p class="product-name">Xbox 360</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <button class="slider-button prev"><</button>
                        <button class="slider-button next">></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
