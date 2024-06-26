<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="sidebar bg-white">
        <ul class="nav flex-column">
            <li class="nav-item row text-black">
                <a class="nav-link active text-black" href="/adm/usr">Пользователи</a>
                <a class="nav-link active text-black" href="/adm/srv">Услуги</a>
                <a class="nav-link active text-black" href="/adm/shf">График</a>
                <a class="nav-link active text-black" href="/adm/sbs">Абонимент</a>
            </li>
        </ul>
    </div>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>