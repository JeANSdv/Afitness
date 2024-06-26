@extends('main')

@section('title', $cat_name)

@section('content')

<div class="container text-white">
    @foreach ($category as $service)

        <div class="row col-12 op-bl-bg p-4 my-3 rounded-4">
            <div class="col-3 bg-black text-center p-2 rounded-4">
                <img src="/img/{{$service->image_path}}" class="img-fluid card-img rounded-4" alt="">
                <h2>{{ $service->title }}</h2>
            </div>
            <div class="col-9 text-center">
                <p class="">{{ $service->description }}</p>
                <a class="col-6 col-sm-6 col-lg-3 btn cta-b rounded-3 py-2"
                    href="{{url('/category/services', $service->id)}}">Выбрать абонимент</a>
            </div>
        </div>
    @endforeach
</div>

@endsection