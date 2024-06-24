@extends('main')

@section('title', 'Контакты')

@section('content')

<div class="container mt-5">
    <div class="contact text-white ">
        <h1 class="display-4 d-flex justify-content-center align-items-center">Контакты тренажёрного зала "ApexFitness"</h1>
        <p class="lead d-flex justify-content-center align-items-center ">Здесь вы можете найти информацию о нашем тренажёрном зале и связаться с нами.</p>
    </div>

    <div class="row text-white lead mt-5">
        <div class="col-md-4">
            <h3>Адрес</h3>
            <p>Москва, ул. Примерная, д. 123, офис 45</p>
        </div>
        <div class="col-md-4">
            <h3>Телефон</h3>
            <p>+7 (495) 123-45-67</p>
        </div>
        <div class="col-md-4">
            <h3>Email</h3>
            <p>apex@fitness.com</p>
        </div>
    </div>
</div>


@endsection