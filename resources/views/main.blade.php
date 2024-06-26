<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/elements.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>



<body class="main-bg">

    <header>
        <nav class="navbar navbar-expand-lg py-3 border-bottom border-dark shadow">
            <div class="container">
                <a class=" navbar-brand" href="/">
                    <img src="/img/logo-light.png" alt="ApexFitness" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/category">Услуги</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/food">Спортивное питание</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/trainer">Тренеры</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/review">Отзывы</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/about">О нас</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/contact">Контакты</a>
                        </li>
                        <li class="nav-item px-xxl-4 px-xl-3 px-lg-2">
                            <a class="nav-link" href="/login">Профиль</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer text-white border-top border-dark shadow mt-5 op-bl-bg">
        <div class="container">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-md-4 col-lg-3">
                    <ul class="list-unstyled">
                        <h5>Адрес</h5>
                        <li><i class="fas fa-map-marker-alt"></i> Москва, ул. Примерная, д. 123, офис 45</li>
                    </ul>
                    <ul class="list-unstyled">
                        <h5>Режим работы</h5>
                        <li><i class="fas fa-map-marker-alt"></i> Пн-Пт: с 9:00 до 21:00</li>
                        <li><i class="fas fa-phone"></i> Сб-Вс: с 10:00 до 20:00</li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-6">
                    <!-- Пустой блок для выравнивания контента -->
                </div>
                <div class="col-md-4 col-lg-3">
                    <ul class="list-unstyled">
                        <h5>Почта для связи</h5>
                        <li><i class="fas fa-envelope"></i> <a class="nav-link"
                                href="mailto:info@fitnessclub.com">apex@fitnessclub.com</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <h5>Наш номер телефона</h5>
                        <li><i class="fas fa-phone"></i> +7 (495) 123-45-67</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white text-center py-3">
            &copy; 2024 ApexFitness. Все права защищены.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>