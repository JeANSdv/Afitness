@extends('main')

@section('title', 'Личный кабинет')

@section('content')

<div class="container mt-5 text-white ">
    <div class="kabinet ">
        <h1 class="display-4 d-flex justify-content-center align-items-center">Добро пожаловать, {{$user->name}}!</h1>
        <p class="lead d-flex justify-content-center align-items-center">Здесь вы можете управлять своими данными и
            абонементами.</p>
    </div>


    <!-- <h3>Личная информация</h3>
            <ul>
                <li><strong>ФИО:</strong> {{$user->name}} {{$user->second_name}} {{$user->third_name}}</li>
                <li><strong>Email:</strong> {{$user->email}}</li>
                <li><strong>Телефон:</strong> {{$user->phone_number}}</li>
                <li><strong>Дата рождения:</strong> {{$user->birth_date}}</li>
                <div class="conatainer text-white">
            </ul> -->
    <div class="row"></div>
    <a class="col-4 col-sm-4 btn cta-b rounded-3 py-4 mt-5" href="">Просмотреть личную
        информацию</a>

    <a class="col-4 col-sm-4 btn cta-b rounded-3 py-4 mt-5 ms-5" href="">Перейти в
        чат</a>




</div>
</div>
</div>