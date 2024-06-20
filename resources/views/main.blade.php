<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>MAIN</title>
</head>

<body>

    <nav class="navbar navbar-expand-md bg-body-tertiary sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand d-md-none" href="#">
                <img src="../img/logo.png" alt="">
                Apex
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#aperture"></use>
                                </svg>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Спортивное питание</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Тренеры</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Личный кабинет</a></li>
                        <li class="nav-item"><a class="nav-link" href="/laravel">laravel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#cart"></use>
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



</body>

</html>