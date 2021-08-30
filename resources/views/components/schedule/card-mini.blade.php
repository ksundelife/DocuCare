@push('style')
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900');

        html {
            height: 100%;
        }
        body {
            background-color: #f8f9fa;
            color: #272b41;
            font-family: "Poppins",sans-serif;
            font-size: 0.9375rem;
            height: 100%;
            overflow-x: hidden;
        }
        h4 {
            color: #272b41;
            font-weight: 500;
            font-size: 1.125rem;
        }

        a {
            color: #2E3842;
            text-decoration: none;
        }
        a:hover {
            color: #66c323;
        }
        a:hover,
        a:active,
        a:focus {
            outline: none;
            text-decoration: none;
        }

        input,
        button,
        a {
            transition: all 0.4s ease;
        }
        button:focus {
            outline: 0;
        }

        .card {
            margin-bottom: 0.9375rem;
        }
        .card {
            border: 1px solid #f0f0f0;
            margin-bottom: 1.875rem;
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
        .booking-doc-info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .booking-doc-info .booking-doc-img {
            width: 80px;
            margin-right: 15px;
        }
        .booking-doc-info .booking-doc-img img {
            border-radius: 4px;
            height: 80px;
            width: 80px;
            object-fit: cover;
        }
    </style>
@endpush
<div class="card mt-40px">
    <div class="card-body">
        <div class="booking-doc-info">
            <a href="{{route('doctors.show',compact('specialist'))}}" class="booking-doc-img">
                <img src="{{$specialist->photo}}" alt="User Image">
            </a>
            <div class="booking-info">
                <h4><a href="{{route('doctors.show',compact('specialist'))}}">Д-р. {{$specialist->user->name.' '.$specialist->user->surname ?? 'Николай Чавез'}}</a></h4>
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
                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{$specialist->location}}</p>
            </div>
        </div>
    </div>
</div>
