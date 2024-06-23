@extends('main')

@section('title', 'Вход')

@section('content')

<div class="container d-flex justify-content-center text-white mt-5">
    <form class="col-5 seco-bg p-5 rounded-4" action="#">
        <div class="container">
            <h1 class="mb-4 text-center">Вход</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="apex@example.com">
            </div>
            <div class="mb-5">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
            </div>
            <button class="btn cta-b rounded-3 py-2 w-100 mb-4" type="submit">Войти</button>
        </div>
    </form>
</div>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-3">
        <a class="btn cta-b rounded-3 py-2 w-100 border-2" href="/register">Регистрация</a>
    </div>
</div>

@endsection