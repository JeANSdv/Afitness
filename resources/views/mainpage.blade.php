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
<div class="container">
    <h1 class="text-center text-white">НАШИ УСЛУГИ</h1>
    <div class="seperator bg-warning">
        <div id="separator-5435933ece" class="cmp-separator">
            <hr class="cmp-separator__horizontal-rule ">
        </div>
    </div>
    <h3 class="card-title text-center clr-text-ylw">мы предлагаем</h3>
    <div class="container text-white">
        <div class="row gap-0 column-gap-5 mt-5 justify-content-center">

            <div class="col-3 bg-warning text-center p-2 rounded-4">
                <img src="/img/mainpage/gym.jpg" class="img-fluid card-img rounded-4" href="" alt="">
                <h2>Тренажерный Зал</h2>
            </div>

            <div class="col-3 bg-black text-center p-2 rounded-4">
                <img src="/img/mainpage/gym.jpg" class="img-fluid card-img rounded-4" href="" alt="">
                <h2>Бассейн</h2>
            </div>

            <div class="col-3 bg-black text-center p-2 rounded-4">
                <img src="/img/mainpage/gym.jpg" class="img-fluid card-img rounded-4" href="" alt="">
                <h2>Боксерский Зал</h2>
            </div>
            <a class="col-6 col-sm-6 col-lg-2 btn cta-b rounded-3 mt-5" href="/category">ВЫБРАТЬ УСЛУГУ</a>
        </div>


    </div>
</div>

<div class="container mt-5 ">
    <h1 class="text-center text-white ">НАШИ ЗАЛЫ</h1>
    <div class="seperator bg-warning">
        <div id="separator-5435933ece" class="cmp-separator">
            <hr class="cmp-separator__horizontal-rule">
        </div>
    </div>
    <h3 class="text-center clr-text-ylw">современные и комфортные условия</h3>
</div>
<div class="container-fluid mt-5 p-0">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/mainpage/slider/gym_dumbbells_inventory_219519_1920x1080.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ЗАЛ С ЕВРОПЕЙСКИМИ ТРЕНАЖЕРАМИ</h5>
                    <p>Совершенно НОВАЯ техника и оборудование, прямиком из Гремании и других уголков Европы!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mainpage/slider/H5_Studiogalerie_V1_Free-Weights_16x9.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ЗАЛ С ОБЫЧНЫМИ ТРЕНАЖЕРАМИ</h5>
                    <p>Стандартный зал, в котором обычно занимаются новички и у них очень даже неплохо получается!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/mainpage/slider/sportzal-shtangi-sport.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ЗАЛ С ПРОФ ТРЕНАЖЕРАМИ</h5>
                    <p>В этот зале занимались многие знаменитости России и не только! Брось вызов своему телу и духу!
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <div class="container mt-5 ">
        <h1 class="text-center text-white ">О НАС</h1>
        <div class="seperator bg-warning">
            <div id="separator-5435933ece" class="cmp-separator">
                <hr class="cmp-separator__horizontal-rule">
            </div>
        </div>
        <h3 class="text-center clr-text-ylw">немного слов о нашей компании</h3>
        <div class="text-white mt-5 ms-5">
            <h1>APEX FITNESS</h1>
            <div class="seperator bg-warning">
                <div id="separator-5435933ece" class="cmp-separator">
                    <hr class="cmp-separator__horizontal-rule">
                </div>
            </div>
            <p>В самом сердце города, среди небоскребов и бесконечной суеты, расположен тренажерный зал Apex Fitness.
                Это место, где каждый может найти вдохновение для преодоления собственных пределов и достижения новых
                высот. Здесь, в зале Apex Fitness, тренировались легенды. Billy Herington, известный своими невероятными
                способностями к преодолению, находил здесь свою силу и мотивацию. Его упорство и целеустремленность
                стали вдохновением для всех посетителей зала. </p>
            <p>И не менее впечатляющая фигура Ван Даркхолма, который нашел в Apex Fitness идеальное место для развития
                своей силы и гибкости. Его техника и страсть к тренировкам заразительны, и он стал символом преданности
                своему телу и здоровью. Здесь каждый найдет что-то свое: будь то желание привести себя в форму,
                стремление к физическому совершенству или просто жажда движения. В Apex Fitness мы создаем обстановку,
                которая позволяет каждому посетителю раскрыть свой потенциал и достичь невероятных результатов.</p>

            <a class="col-6 col-sm-6 col-lg-2 btn cta-b rounded-3 mt-5" href="/about">ЧИТАТЬ БОЛЬШЕ</a>
        </div>
    </div>

</div>
@endsection