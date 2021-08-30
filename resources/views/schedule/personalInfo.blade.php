<x-app-layout>
    <div class="main-wrapper" style="transform: none;">
        <div class="content" style="transform: none; min-height: 237px;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-md-7 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('books.store') }}">
                                    @csrf
                                    <input type="hidden" name="specialist_id" value="{{ $specialist->id }}">
                                    <input type="hidden" name="schedule_id" value="{{ $schedule }}">
                                    <input type="hidden" name="datetime" value="{{ $datetime }}">
                                    <div class="info-widget">
                                        <h1>Вы записаны к {{ 'Д-ру. '.$specialist->user->name.' '.$specialist->user->surname ?? 'Д-ру. Николай Чавез' }}
                                            на {{ $datetime->format('j F Y года') ?? '0 июля 2021 года' }}
                                            в {{ $datetime->format('H:i') ?? '00:00' }}</h1>
                                        <h4 class="card-title">Личная информация</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Фамилия</label>
                                                    <input class="form-control" type="text" name="surname" value="{{ $user->surname ?? '' }}">
                                                </div>
                                            </div>{{--Фамилия--}}
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Имя</label>
                                                    <input class="form-control" type="text" name="name" value="{{ $user->name ?? '' }}">
                                                </div>
                                            </div>{{--Имя--}}
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Отчество</label>
                                                    <input class="form-control" type="text" name="second_name" value="{{ $user->second_name ?? '' }}">
                                                </div>
                                            </div>{{--Отчество--}}
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Возраст</label>
                                                    <input class="form-control" type="number" name="age">
                                                </div>
                                            </div>{{--Возраст--}}
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>E-mail</label>
                                                    <input class="form-control" type="email" name="email" value="{{ $user->email ?? '' }}">
                                                </div>
                                            </div>{{--Мэйл--}}
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Телефон</label>
                                                    <input class="form-control" type="text" name="phone">
                                                </div>
                                            </div>{{--Тел--}}
                                            @empty($user)
                                                <div class="exist-customer">Уже зарегистрированы? <a href="{{ route('login') }}">Нажмите для входа</a></div>
                                            @endempty
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Опишите причину посещения</label>
                                                    <input class="form-control" type="text" name="description">
                                                </div>
                                            </div>{{--Описание--}}
                                        </div>
                                        <div class="submit-section mt-4">
                                            <button type="submit" class="btn btn-primary submit-btn apt-btn">Подтвердить</button>
                                        </div>
                                    </div>

{{--                                    Payment--}}
                                    {{--<div class="payment-widget">
                                        <h4 class="card-title">Payment Method</h4>

                                        <div class="payment-list">
                                            <label class="payment-radio credit-card-option">
                                                <input type="radio" name="radio" checked="">
                                                <span class="checkmark"></span>
                                                Credit card
                                            </label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_name">Name on Card</label>
                                                        <input class="form-control" id="card_name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_number">Card Number</label>
                                                        <input class="form-control" id="card_number" placeholder="1234  5678  9876  5432" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_month">Expiry Month</label>
                                                        <input class="form-control" id="expiry_month" placeholder="MM" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_year">Expiry Year</label>
                                                        <input class="form-control" id="expiry_year" placeholder="YY" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="cvv">CVV</label>
                                                        <input class="form-control" id="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="payment-list">
                                            <label class="payment-radio paypal-option">
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                                Paypal
                                            </label>
                                        </div>


                                        <div class="terms-accept">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms_accept">
                                                <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                            <div class="card booking-card">
                                <div class="card-header">
                                    <h4 class="card-title">Итоги бронирования</h4>
                                </div>
                                <div class="card-body">
                                    <div class="booking-doc-info">
                                        <a href="{{route('doctors.show',compact('specialist'))}}" class="booking-doc-img">
                                            <img src="{{ $specialist->photo }}" alt="User Image">
                                        </a>
                                        <div class="booking-info">
                                            <h4><a href="{{ route('doctors.show',compact('specialist')) }}">{{ 'Д-р. '.$specialist->user->name.' '.$specialist->user->surname ?? 'Д-р. Николай Чавез' }}</a></h4>
                                            <div class="rating">
                                                @for($i = 0; $i < 5; $i++)
                                                    @if($i < $specialist->averageScore())
                                                        <i class="fas fa-star filled"></i>
                                                    @else
                                                        <i class="fas fa-star"></i>
                                                    @endif
                                                @endfor
                                                <span class="d-inline-block average-rating">({{ $specialist->feedbacks->count() }})</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{ $specialist->location ?? 'Newyork, USA' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-summary">
                                        <div class="booking-item-wrap">
                                            <ul class="booking-date">
                                                <li>Дата <span>{{ $datetime->format('j F Y года') ?? '0 июля 2021 года' }}</span></li>
                                                <li>Время <span>{{ $datetime->format('H:i') ?? '00:00' }}</span></li>
                                            </ul>
                                            <ul class="booking-fee">
                                                <li>Стоимость <span>{{ $specialist->price }} руб.</span></li>
{{--                                                <li>Booking Fee <span>$10</span></li>--}}
{{--                                                <li>Video Call <span>$50</span></li>--}}
                                            </ul>
                                            <div class="booking-total">
                                                <ul class="booking-total-list">
                                                    <li>
                                                        <span>Total</span>
                                                        <span class="total-cost">{{ $specialist->price }} руб.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 399px; height: 752px;"></div>
                                </div>
                                <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('style')
        <style type="text/css" >
            body {
                background-color: #f8f9fa;
                color: #272b41;
                height: 100%;
                overflow-x: hidden;
                font-family: "Poppins",sans-serif;
                font-size: 0.9375rem;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            p {
                margin-top: 0;
                margin-bottom: 1rem;
            }

            .content {
                min-height: 200px;
                padding: 30px 0 0;
            }
            .card {
                border: 1px solid #f0f0f0;
                margin-bottom: 1.875rem;
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border-radius: .25rem;
            }
            .card-body {
                padding: 1.5rem;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
            }
            .card-header {
                padding: .5rem 1rem;
                margin-bottom: 0;
                background-color: rgba(0,0,0,.03);
                border-bottom: 1px solid rgba(0,0,0,.125);
            }
            .card-header:first-child {
                border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
            }
            .card-title {
                margin-bottom: .5rem;
            }
            .card-body {
                padding: 1.5rem;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
            }

            .rating {
                list-style: none;
                margin: 0 0 7px;
                padding: 0;
                width: 100%;
            }
            .rating i {
                color: #dedfe0;
            }
            .rating i.filled {
                color: #f4c150;
            }

            .info-widget {
                border-bottom: 1px solid #f0f0f0;
                padding-bottom: 30px;
                margin-bottom: 30px;
            }
            .info-widget > h1{
                font-size: xx-large;
                color: darkred;
            }
            .h4, h4 {
                font-size: 1.125rem;
                color: #272b41;
                font-weight: 500;
                line-height: 1.2;
                margin-top: 0;
            }
            .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            .form-group {
                margin-bottom: 1.25rem;
            }
            .card-label > label {
                background-color: #fff;
                color: #959595;
                display: inline-block;
                font-size: 13px;
                font-weight: 500;
                margin: 6px auto auto 8px;
                padding: 0 7px;
            }
            .card-label > input {
                background-color: #fff;
                border: 1px solid #dbdbdb;
                border-radius: 4px;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .05);
                display: block;
                height: 50px;
                margin-top: -13px;
                padding: 5px 15px 0;
                transition: border-color .3s;
                width: 100%;
            }
            .form-control:focus {
                box-shadow: none;
                border-color: #3330306b;
                outline: 0;
            }
            .exist-customer a {
                color: #4498dc;
                font-weight: 500;
                -webkit-transition: all 0.4s ease;
            }
            .apt-btn {
                background-color: #4890cb;
                color: #fff;
                border-radius: 4px;
                display: block;
                font-size: 14px;
                font-weight: 500;
                letter-spacing: 1px;
                padding: 10px 25px;
                text-align: center;
                text-transform: uppercase;
            }
            .apt-btn:hover, .apt-btn:focus {
                background-color: #4184bb;
                border-color: #4184bb;
                color: #fff;
            }
            .booking-doc-info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }
            .booking-doc-info .booking-doc-img img {
                border-radius: 4px;
                height: 80px;
                width: 80px;
                object-fit: cover;
                margin-right: 15px;
            }
            .clinic-details {
                margin-bottom: 15px;
            }
            .doc-location {
                color: #757575;
                font-size: 14px;
                margin-bottom: 25px;
            }
            .booking-date,.booking-fee {
                padding: 0;
                list-style: none;
            }
            .booking-date li,.booking-fee li {
                position: relative;
                font-size: 14px;
                font-weight: 500;
                color: #272b41;
                text-transform: capitalize;
                margin-bottom: 15px;
            }
            .booking-date li span,.booking-fee li span {
                float: right;
                color: #757575;
                font-weight: 400;
                font-size: 15px;
            }
            .booking-total {
                border-top: 1px solid #e4e4e4;
                margin-top: 20px;
                padding-top: 20px;
            }
            .booking-total ul {
                padding: 0;
                list-style: none;
                margin: 0;
            }
            .booking-total ul li span {
                font-size: 18px;
                font-weight: 600;
                color: #272b41;
            }
            .booking-total ul li .total-cost {
                color: #4498dc;
                font-size: 16px;
                float: right;
            }
        </style>
    @endpush
</x-app-layout>
