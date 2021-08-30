@props(['doctor'])

<div class="col-md-3">
    <div class="profile-widget">
        <div class="doc-img">
            <a href="{{ route('doctors.show') }}">
                <img class="img-fluid" alt="User Image" src="./img/{{ $doctor['photo'] }}">
            </a>
            <a href="javascript:void(0)" class="fav-btn">
                <i class="far fa-bookmark"></i>
            </a>
        </div>
        <div class="pro-content">
            <h3 class="title">
                <a href="doctor-profile.html"><p class="text-sm text-gray-400 pb-1">Доктор</p>{{ $doctor['name'] }}</a>
                <i class="fas fa-check-circle verified"></i>
            </h3>
            <p class="speciality">{{ $doctor['speciality'] }}</p>
            <div class="rating">
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <span class="d-inline-block average-rating">(17)</span>
            </div>
            <ul class="available-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i> {{ $doctor['location'] }}
                </li>
                <li>
                    <i class="far fa-clock"></i> Часы приема в пт, 22 марта
                </li>
                <li>
                    <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle"
                                                                          data-toggle="tooltip" title=""
                                                                          data-original-title="Lorem Ipsum"></i>
                </li>
            </ul>
            <div class="row row-sm">
                <div class="col-6">
                    <a href="{{ route('doctors.show') }}" class="btn view-btn">Подробнее</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('schedule.index') }}" class="btn book-btn">Записаться</a>
                </div>
            </div>
        </div>
    </div>
</div>





@push('style')
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }

        .container-fluid {
            padding-left: 30px;
            padding-right: 30px;
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            /*width: 100%;*/
            padding-right: 15px;
            padding-left: 15px;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .profile-widget {
            background-color: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 4px;
            margin-bottom: 30px;
            position: relative;
            -webkit-transition: all .3s ease 0s;
            -moz-transition: all .3s ease 0s;
            -o-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            padding: 15px;
        }

        .doc-img {
            position: relative;
            overflow: hidden;
            z-index: 1;
            border-radius: 4px;
        }

        input, button, a {
            transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
        }

        a {
            color: #2E3842;
        }

        .doc-img img {
            border-radius: 4px;
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            transform: translateZ(0);
            -moz-transition: all 2000ms cubic-bezier(.19, 1, .22, 1) 0ms;
            -ms-transition: all 2000ms cubic-bezier(.19, 1, .22, 1) 0ms;
            -o-transition: all 2000ms cubic-bezier(.19, 1, .22, 1) 0ms;
            -webkit-transition: all 2000ms cubic-bezier(.19, 1, .22, 1) 0ms;
            transition: all 2000ms cubic-bezier(.19, 1, .22, 1) 0ms;
            width: 100%;
        }

        .profile-widget .fav-btn {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #fff;
            width: 30px;
            height: 30px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            justify-content: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            border-radius: 3px;
            color: #2E3842;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            opacity: 0;
            visibility: hidden;
            z-index: 99;
        }

        .pro-content {
            padding: 15px 0 0;
        }

        .pro-content .title {
            font-size: 17px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .profile-widget .verified {
            color: #28a745;
            margin-left: 3px;
        }

        .profile-widget .pro-content .title a {
            display: inline-block;
        }

        .profile-widget p.speciality {
            font-size: 13px;
            color: #757575;
            margin-bottom: 5px;
            min-height: 40px;
        }

        .profile-widget .rating {
            color: #757575;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .profile-widget .rating i {
            font-size: 14px;
        }

        .rating i.filled {
            color: #f4c150;
        }

        .profile-widget .rating {
            color: #757575;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .available-info {
            font-size: 13px;
            color: #757575;
            font-weight: 400;
            list-style: none;
            padding: 0;
            margin-bottom: 15px;
        }

        .available-info li i {
            width: 22px;
            /*padding-bottom: 14px;*/
        }

        .row.row-sm {
            margin-left: -3px;
            margin-right: -3px;
        }

        .row.row-sm > div {
            padding-left: 3px;
            padding-right: 3px;
        }

        .view-btn {
            color: #4890cb;
            font-size: 13px;
            border: 2px solid #4890cb;
            text-align: center;
            display: block;
            font-weight: 500;
            padding: 6px;
        }

        .book-btn {
            background-color: #4890cb;
            border: 2px solid #4890cb;
            color: #fff;
            font-size: 13px;
            text-align: center;
            display: block;
            font-weight: 500;
            padding: 6px;
        }


    </style>
@endpush
