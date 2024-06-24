@extends('main')

@section('title', 'Личный кабинет')

@section('content')

<div class="conatainer text-white">
    <h1>PERSONAL</h1>
    <a class="col-4 col-sm-4 col-lg-2 btn cta-b rounded-3 py-2" href="{{ route('logout') }}">Выйти из аккаунта</a>
</div>

@endsection