@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="feedback_form" class="card p-40px" style="display:none;">
    <div class="card-body pt-0">
        <h4 class="widget-title mb-4">Оставить отзыв о <span class="text-gray-500">{{ $specialist->user->getNameAndSurname()}}</span></h4>
        <form method="post" action="{{ route('feedback.store') }}">
            @csrf

            <div class="card-label">
{{--                <input class="form-control" name="user_id" value="{{ $bookFeedback->user->id }}" type="hidden">--}}
                <input class="form-control" name="book_id" value="{{ $bookFeedback->id }}" type="hidden">
                <p class="text-lg text-gray-700 mb-3">От: {{ $bookFeedback->getNameAndSurname() }}</p>
                <input class="form-control" name="specialist_id" value="{{ $specialist->id }}" type="hidden">
            </div>

            <fieldset class="star-rating">
                <input type="radio" id="star-5" name="value" value="5" />
                <label class = " fa fa-star" for="star-5" title="Отлично"></label>

                <input type="radio" id="star-4" name="value" value="4" />
                <label class = "fa fa-star" for="star-4" title="Хорошо"></label>

                <input type="radio" id="star-3" name="value" value="3" />
                <label class = "fa fa-star" for="star-3" title="Удовлетворительно"></label>

                <input type="radio" id="star-2" name="value" value="2" />
                <label class = "fa fa-star" for="star-2" title="Плохо"></label>

                <input type="radio" id="star-1" name="value" value="1" onclick="clickRadio(this)"/>
                <label class = "fa fa-star" for="star-1" title="Ужасно"></label>

                <input type="radio" name="value" value="0"  checked="" />

            </fieldset>

            <div class="card-label">
                <label>Напишите отзыв</label>
                <textarea name="body_text" class="form-control" ></textarea>
            </div>
            <input type="submit" class="apt-btn mt-8" value="Оставить отзыв">
        </form>
    </div>
</div>
@push('scripts')
    <script>
        function clickRadio(param) {
            const imputeValue = document.querySelector('#star-1');
            if (param.BeforeCheck){
                param.checked = false;
            }
            param.BeforeCheck = param.checked;

            if(param.BeforeCheck !== false){
                imputeValue.addEventListener('click', () => {
                    imputeValue.value = "0";
                });
            }
        }
    </script>

@endpush
@push('style')
    <style>
        .apt-btn {
            background-color: #4890cb;
            color: #fff;
            border-radius: 4px;
            display: block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 10px 20px;
            text-align: center;
            text-transform: uppercase;
        }
        .apt-btn:hover, .apt-btn:focus {
            background-color: #4184bb;
            border-color: #4184bb;
            color: #fff;
        }
        .star-rating {
            display: inline-block;
        }
        .star-rating > input {
            display: none;
        }
        .star-rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            display: inline-block;
            content: "\f005";
        }
        .star-rating > label {
            color: #ddd;
            float: right;
        }

        .star-rating > input:checked ~ label,
        .star-rating:not(:checked) > label:hover,
        .star-rating:not(:checked) > label:hover ~ label {
            color: #f4c150;
        }

        .star-rating > input:checked + label:hover,
        .star-rating > input:checked ~ label:hover,
        .star-rating > label:hover ~ input:checked ~ label,
        .star-rating > input:checked ~ label:hover ~ label {
            color: #FFED85;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #3330306b;
            outline: 0;
        }
        textarea:focus,
        input:focus {
            outline: none;
        }
        .card-label > label {
            background-color: #fff;
            color: #959595;
            position: relative;
            font-size: 13px;
            font-weight: 500;
            margin: 6px auto auto 8px;
            padding: 0 7px;
        }
        .card-label > textarea,
        .card-label > input {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            display: block;
            height: 90px;
            margin-top: -10px;
            padding: 5px 15px 0;
            transition: border-color .3s;
            max-width: 500px;
            max-height: 150px;
        }
    </style>

@endpush
