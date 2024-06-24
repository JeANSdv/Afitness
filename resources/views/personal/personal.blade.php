@extends('main')

@section('title', 'Личный кабинет')

@section('content')

<div class="container mt-5 text-white ">
    <div class="kabinet ">
        <h1 class="display-4 d-flex justify-content-center align-items-center">Добро пожаловать, {{$user->name}}!</h1>
        <p class="lead d-flex justify-content-center align-items-center">Здесь вы можете управлять своими данными и
            абонементами.</p>
    </div>

    <div class="row">
        <div class="col-md-6 text-white">
            <h3>Личная информация</h3>
            <ul>
                <li><strong>ФИО:</strong> {{$user->name}} {{$user->second_name}} {{$user->third_name}}</li>
                <li><strong>Email:</strong> {{$user->email}}</li>
                <li><strong>Телефон:</strong> {{$user->phone_number}}</li>
                <li><strong>Дата рождения:</strong> {{$user->birth_date}}</li>
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
            <a class="col-4 col-sm-4 col-lg-2 btn cta-b rounded-3 py-2" href="{{ route('logout') }}">Выйти из
                аккаунта</a>
        </div>
    </div>
</div>
@endsection