@extends('main')

@section('title', 'Личный кабинет')

@section('content')

<div class="container mt-5 text-white ">
    <div class="kabinet ">
        <h1 class="display-4 d-flex justify-content-center align-items-center">Добро пожаловать, {{$user->name}}!</h1>
        <p class="lead d-flex justify-content-center align-items-center">Здесь вы можете управлять своими данными и
            абонементами.</p>
    </div>
    <div class="row justify-content-center">
        <a href="/personal/info" class="text-decoration-none">
            <div class="container text-white">
                <div class="row col-12 op-bl-bg p-4 my-3 rounded-4 ">

                    <h2>ЛИЧНАЯ ИНФОРМАЦИЯ</h2>

                </div>

            </div>
        </a>
        <a href="" class="text-decoration-none">
            <div class="container text-white">
                <div class="row col-12 op-bl-bg p-4 my-3 rounded-4">
                    <h2>ЧАТ</h2>
                </div>

            </div>
        </a>
        <a href="" class="text-decoration-none">
            <div class="container text-white">
                <div class="row col-12 op-bl-bg p-4 my-3 rounded-4">
                    <h2>АБОНИМЕНТЫ</h2>
                </div>

            </div>
        </a>
        <a href="" class="text-decoration-none">
            <div class="container text-white">
                <div class="row col-12 op-bl-bg p-4 my-3 rounded-4">
                    <h2>ЗАПИСИ</h2>
                </div>

            </div>
        </a>
    </div>
</div>
<div class="row justify-content-center">
    <a class="col-4 col-sm-4 btn cta-b rounded-3 py-4 mt-5 me-4 " href="{{route('logout')}}">Выйти</a>
</div>
</div>

@endsection