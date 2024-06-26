@extends('main')

@section('title', 'Личная информация')

@section('content')


<style>
    .user-info {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 50px;
    }
</style>
</head>
<div class="container user-info text-white">
    <h1>Личная информация</h1>
    <div class="card op-bl-bg">
        <div class="card-body">
            <h5 class="card-title">{{$user->name}} {{$user->second_name}} {{$user->third_name}}</h5>
            <p class="text-white">Дата Рождения: {{$user->birth_date}}</p>
            <p class="text-white">Email: {{$user->email}}</p>
            <p class="text-white">Телефон: {{$user->phone_number}}</p>
            <p class="text-white">Пол: {{$user->sex}}</p>
            <a class="col-6 col-sm-6  btn cta-b rounded-3 mt-3">Изменить</a>
        </div>
    </div>
</div>
</body>

</html>


@endsection