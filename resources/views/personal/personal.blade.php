@extends('main')

@section('title', 'Личный кабинет')

@section('content')

<div class="container mt-5 text-white ">
    <div class="kabinet ">
        <h1 class="display-4 d-flex justify-content-center align-items-center">Добро пожаловать, Иван!</h1>
        <p class="lead d-flex justify-content-center align-items-center">Здесь вы можете управлять своими данными и абонементами.</p>
    </div>

    <div class="row">
        <div class="col-md-6 text-white">
            <h3>Личная информация</h3>
            <ul>
                <li><strong>Имя:</strong> Иван Иванов</li>
                <li><strong>Email:</strong> ivan@example.com</li>
                <li><strong>Телефон:</strong> +7 (123) 456-78-90</li>
                <li><strong>Дата рождения:</strong> 01.01.1990</li>
            </ul>
        </div>
        <div class="col-md-6 text-white">
            <h3>Активные абонементы</h3>
            <ul>
                <li><strong>Абонемент №1:</strong> Годовой клубный</li>
                <li><strong>Срок действия:</strong> до 31.12.2024</li>
                <li><strong>Тренировок осталось:</strong> 15</li>
            </ul>
        </div>
        
        <div class="conatainer text-white">
        <a class="col-4 col-sm-4 col-lg-2 btn cta-b rounded-3 py-2" href="{{ route('logout') }}">Выйти из аккаунта</a>
        </div>
    </div>
</div>


@endsection