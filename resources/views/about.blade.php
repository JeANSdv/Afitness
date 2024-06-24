@extends('main')

@section('title', 'Апекс Фитнесс')

@section('content')
<!-- Заголовок -->
<div class="container-fluid text-white p-0">
    <div class="container-fluid card border-0 p-0">
        <img src="/img/mainpage/gym.jpg" class="img-fluid card-img rounded-0" alt="">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-title text-center">ТРЕНАЖЕРНЫЙ ЗАЛ APEX FITNESS</h1>
            <p
                class="card-text text-break text-center fs-5 col-8 shadow-sm d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
                APEX FITNESS — федеральная сеть современных фитнес-клубов.
                Наша концепция основана на демократичном подходе к ценообразованию — ничего лишнего,
                только спорт, только те услуги, которые необходимы, без навязывания дополнительных платежей и «скрытых»
                расходов.</p>
        </div>
    </div>
</div>

<!-- Новости -->
<div class="container my-3">
    <div class="row">
        <!-- Новостная карточка 1 -->
        <div class="col-md-4 col-md-4 d-flex justify-content-center align-items-center">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">МИССИЯ APEX FITNESS</h5>
                    <p class="card-text">Главная цель — помочь людям изменить их жизнь и здоровье к лучшему. Мы хотим
                        чтобы спорт был доступен для всех, вне зависимости от социального положения, пола и возраста.
                    </p>
                </div>
            </div>
        </div>
        <!-- Новостная карточка 2 -->
        <div class="col-md-4 col-md-4 d-flex justify-content-center align-items-center">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">МИССИЯ APEX FITNESS</h5>
                    <p class="card-text">Наш приоритет — оптимальное соотношения цены и качества предоставляемых услуг.
                        Мы стремимся, чтобы фитнес-услуги становились более доступными для людей по всей стране.

                    </p>
                </div>
            </div>
        </div>
        <!-- Новостная карточка 3 -->
        <div class="col-md-4 col-md-4 d-flex justify-content-center align-items-center">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">МИССИЯ APEX FITNESS</h5>
                    <p class="card-text">Мы реализуем специальные спортивные программы для пенсионеров, воспитанников
                        детских домов, людей с ограниченными возможностями.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection