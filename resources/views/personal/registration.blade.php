@extends('main')

@section('title', 'Вход')

@section('content')

<div class="container d-flex justify-content-center text-white my-5">
    <form class="col-5 seco-bg p-5 rounded-4" method="post" action="{{ route('register') }}">
        @csrf
        <div class="container">
            <h1 class="mb-4 text-center">Регистрация</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Apex">
            </div>
            <div class="mb-3">
                <label for="sname" class="form-label">Фамилия</label>
                <input type="sname" class="form-control" name="sname" id="sname" placeholder="Apexov">
            </div>
            <div class="mb-3">
                <label for="tname" class="form-label">Отчество</label>
                <input type="tname" class="form-control" name="tname" id="tname" placeholder="Apexovich">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="apex@example.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
            </div>
            <div class="mb-3">
                <label for="password_" class="form-label">Проверка</label>
                <input type="password" class="form-control" name="password_" id="password_"
                    placeholder="Повторите пароль">
            </div>
            <div class="mb-5">
                <label for="bdate" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" name="bdate" id="bdate">
            </div>
            <button class="btn cta-b rounded-3 py-2 w-100 mb-4" type="submit">Зарегистрироваться</button>
        </div>
    </form>
</div>

@endsection