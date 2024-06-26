@extends('main')

@section('title', 'Абонементы')

@section('content')

<div class="container-fluid text-white">
    <div class="row my-5 text-center">
        <div class="col-6">
            <img class="img-fluid rounded-5 w-75" src="/img/{{$service->image_path}}" alt="">
            <h1 style="font-size: 50px">{{$service->title}}</h1>
        </div>
        <div class="col-6 text-center">
            <h3>{{$service->description}}</h3>

            <!-- аккордеон -->
            <div class="accordion mt-5" style="--bs-accordion-bg: #262626" data-bs-theme="dark" id="accordionMain">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Абонементы
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionMain">
                        <div class="accordion-body">
                            @foreach ($subscriptions as $subscription)
                                <div class="accordion mb-2" style="--bs-accordion-bg: #3A3A3A" data-bs-theme="dark"
                                    id="accordionEmbed{{$loop->iteration}}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseE{{$loop->iteration}}"
                                                aria-expanded="false" aria-controls="collapseE{{$loop->iteration}}">
                                                {{$subscription->title}}
                                            </button>
                                        </h2>
                                        <div id="collapseE{{$loop->iteration}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionEmbed{{$loop->iteration}}">
                                            <div class="accordion-body">
                                                <div class="container p-0">
                                                    <div class="row">
                                                        <div class="col-8 text-start">
                                                            <p class="fs-4">{{$subscription->description}}</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <h2>{{$subscription->price->price}} руб.</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h2>{{$subscription->period}} | {{$subscription->visit_time}}
                                                            </h2>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="btn cta-b rounded-3 py-2" data-bs-toggle="modal"
                                                                data-bs-target="#purchaseConfirmationModal{{$loop->iteration}}">Купить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Модальное окно -->
                                <div class="modal fade" id="purchaseConfirmationModal{{$loop->iteration}}" tabindex="-1"
                                    aria-labelledby="purchaseConfirmationModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="purchaseConfirmationModalLabel">Подтверждение
                                                    покупки</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>{{$subscription->price->price}} руб.</h2>
                                                <h2>{{$subscription->period}} | {{$subscription->visit_time}}</h2>
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="paymentMethodSelect" class="form-label">Выберите способ
                                                            оплаты:</label>
                                                        <select class="form-select" id="paymentMethodSelect">
                                                            <option>Кредитная карта</option>
                                                            <option>Банковский перевод</option>
                                                            <option>Электронный кошелек</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Отмена</button>
                                                <form method="post"
                                                    action="{{url('/subscription', $subscription->subscription_id)}}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Оплатить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection