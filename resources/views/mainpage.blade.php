@extends('main')

@section('title', 'Апекс Фитнесс')

@section('content')

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
            <a class="col-6 col-sm-6 col-lg-2 btn cta-b rounded-3 py-2" href="/about">О НАС</a>
        </div>
    </div>
</div>

@endsection