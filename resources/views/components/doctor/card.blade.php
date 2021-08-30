<div class="card">
    <div class="card-body">
        <div class="doctor-widget">
            <div class="doc-info-left">
                <div class="doctor-img">
                    <img src="{{$specialist->photo}}" class="img-fluid" alt="User Image">
                </div>
                <div class="doc-info-cont">
                    <h4 class="doc-name">Д-р {{$specialist->user->name.' '.$specialist->user->surname}}</h4>
                    <p class="doc-speciality">BDS, MDS - Челюстно-лицевая хирургия</p>
                    <p class="doc-department"><img src="{{$specialist->category->photo}}" class="img-fluid" alt="Speciality">{{$specialist->category->name}}</p>
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
                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$specialist->location}} - <a href="javascript:void(0);">Получить направление</a></p>
                        <ul class="clinic-gallery">
                            <li>
                                <a href="/img/feature-01.jpg" data-fancybox="gallery">
                                    <img src="/img/feature-01.jpg" alt="Feature">
                                </a>
                            </li>
                            <li>
                                <a href="/img/feature-02.jpg" data-fancybox="gallery">
                                    <img src="/img/feature-02.jpg" alt="Feature Image">
                                </a>
                            </li>
                            <li>
                                <a href="/img/feature-03.jpg" data-fancybox="gallery">
                                    <img src="/img/feature-03.jpg" alt="Feature">
                                </a>
                            </li>
                            <li>
                                <a href="/img/feature-04.jpg" data-fancybox="gallery">
                                    <img src="/img/feature-04.jpg" alt="Feature">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clinic-services">
                        <span>Пломбирование</span>
                        <span>Отбеливание зубов</span>
                    </div>
                </div>
            </div>
            <div class="doc-info-right">
                <div class="clini-infos">
                    <ul>
                        <li><i class="far fa-thumbs-up"></i> {{ $specialist->goodScoresPercent() }}%</li>
                        <li><i class="far fa-comment"></i> {{ $specialist->feedbacks->count() }} Отзывов</li>
                        <li><i class="fas fa-map-marker-alt"></i> {{$specialist->location}}</li>
                        <li><i class="far fa-money-bill-alt"></i> {{$specialist->price}} руб/час </li>
                    </ul>
                </div>
                <div class="doctor-action">
                    <a href="javascript:void(0)" class="btn btn-white fav-btn">
                        <i class="far fa-bookmark"></i>
                    </a>
                    <a href="chat.html" class="btn btn-white msg-btn">
                        <i class="far fa-comment-alt"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#voice_call">
                        <i class="fas fa-phone"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#video_call">
                        <i class="fas fa-video"></i>
                    </a>
                </div>
                <div class="clinic-booking">
                    <a class="apt-btn" href="{{ route('schedule.index',compact('specialist')) }}">Запись на прием</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
    <style type="text/css">


        .content {
            min-height: 200px;
            padding: 30px 0 0;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        .doctor-widget {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .doc-info-left {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .doctor-img {
            -ms-flex: 0 0 150px;
            flex: 0 0 150px;
            margin-right: 20px;
            width: 150px;
        }

        .doctor-img img {
            border-radius: 5px;
        }

        .doc-info-right {
            margin-left: auto;
            -ms-flex: 0 0 205px;
            flex: 0 0 205px;
            max-width: 205px;
        }

        .doctor-widget .doc-name {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 3px;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #272b41;
            font-weight: 500;
        }

        .doc-speciality {
            font-size: 14px;
            color: #757575;
            margin-bottom: 15px;
        }

        .doc-department {
            color: #4498dc;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .doc-department img {
            width: 19px;
            display: inline-block;
            margin-right: 10px;
        }

        .rating {
            list-style: none;
            margin: 0 0 7px;
            padding: 0;
            width: 100%;
        }

        .doctor-widget .rating i {
            font-size: 14px;
        }

        .rating i.filled {
            color: #f4c150;
        }

        .rating i {
            color: #dedfe0;
        }

        .doctor-widget .average-rating {
            font-size: 14px;
            font-weight: 500;
        }

        .clinic-details {
            margin-bottom: 15px;
        }

        .doc-location {
            color: #757575;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .clinic-details ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .clinic-details ul li {
            display: inline-block;
            padding-right: 5px;
        }

        .clinic-details ul li a img {
            border-radius: 5px;
            width: 40px;
        }

        .clinic-services {
            color: #272b41;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 13px;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .clinic-services span {
            border: 1px solid #ccc;
            border-radius: 4px;
            display: inline-block;
            font-size: 12px;
            padding: 3px 10px;
        }

        .clinic-services span + span {
            margin-left: 5px;
        }

        .clini-infos {
            margin-bottom: 15px;
        }

        .clini-infos ul {
            font-size: 14px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .clini-infos ul li {
            display: block;
            line-height: 30px;
            color: #4E4852;
        }

        .clini-infos ul li i {
            font-size: 15px;
            min-width: 30px;
        }

        .fa-thumbs-up:before {
            content: "\f164";
        }

        .doctor-action {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .doctor-action .fav-btn:hover {
            background-color: #fb1612;
            border-color: #fb1612;
            color: #fff;
        }

        .msg-btn:hover, .msg-btn:focus {
            background-color: #66c323;
            border-color: #66c323;
            color: #fff;
        }

        .call-btn:hover, .call-btn:focus {
            background-color: #66c323;
            border-color: #66c323;
            color: #fff;
        }

        .btn-white {
            background-color: #fff;
            border: 1px solid #ccc;
            color: #272b41;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        .fa, .far, .fas {
            font-family: "Font Awesome 5 Free";
        }

        .far {
            font-weight: 400;
        }

        .fa, .fab, .fad, .fal, .far, .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .fa-bookmark:before {
            content: "\f02e";
        }

        .doctor-action a + a {
            margin-left: 8px;
        }

        .clinic-booking a.apt-btn {
            background-color: #4890cb;
            color: #fff;
        }

        .clinic-booking a {
            background-color: #fff;
            border: 2px solid #4890cb;
            border-radius: 4px;
            color: #4890cb;
            display: block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 10px 20px;
            text-align: center;
            text-transform: uppercase;
            width: 100%;
        }

        .clinic-booking a.apt-btn:hover, .clinic-booking a.apt-btn:focus {
            background-color: #4184bb;
            border-color: #4184bb;
            color: #fff;
        }

    </style>
@endpush
