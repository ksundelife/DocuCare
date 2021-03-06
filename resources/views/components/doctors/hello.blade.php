@push('style')
    <style type="text/css" >
        body {
            background-color: #f8f9fa;
            color: #272b41;
            font-family: poppins,sans-serif;
            font-size: .9375rem;
            height: 100%;
            overflow-x: hidden;
        }

        .section-search {
            background: #f9f9f9 url(../img/search-bg.png) no-repeat bottom center;
            min-height: 450px;
            background-size: 100% auto;
            position: relative;
            background-blend-mode: Darken;
            padding: 80px 0;
        }

        .container-fluid {
            padding-left: 30px;
            padding-right: 30px;
        }

        .banner-wrapper {
            margin: 0 auto;
            max-width: 800px;
            width: 100%;
        }

        .banner-wrapper .banner-header p {
            color: #757575;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .banner-wrapper .banner-header h1 {
            margin-bottom: 10px;
            font-size: 40px;
            font-weight: 600;
        }

        .text-center {
            text-align: center!important;
        }

        .search-box form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .search-box .search-location {
            -ms-flex: 0 0 240px;
            flex: 0 0 240px;
            margin-right: 12px;
            position: relative;
            width: 240px;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .search-location .form-control {
            background: #fff url(../img/location.png) no-repeat 10px center;
        }

        .search-box .form-control {
            border: 1px solid #ccc;
            box-shadow: inset 0 0 0 rgba(0,0,0,.075);
            border-radius: 5px;
            padding-left: 35px;
        }

        input[type=text], input[type=password] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-control {
            border-color: #dcdcdc;
            color: #333;
            font-size: 15px;
            min-height: 46px;
            padding: 6px 15px;
            width: 100%;
        }

        .search-box .form-text {
            color: #757575;
            font-size: 12px;
        }

        .search-info .form-control {
            background: #fff url(../img/search.png) no-repeat 10px center;
        }

        .search-box .form-control {
            border: 1px solid #ccc;
            box-shadow: inset 0 0 0 rgba(0,0,0,.075);
            border-radius: 5px;
            padding-left: 35px;
        }

        input[type=text], input[type=password] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .search-box .form-text {
            color: #757575;
            font-size: 12px;
        }

        .search-box .search-btn {
            width: 46px;
            -ms-flex: 0 0 46px;
            flex: 0 0 46px;
            height: 46px;
            margin-left: 12px;
        }

        .btn-primary {
            background-color: #66c323;
            border: 1px solid #66c323;
            color: #fff;
            border-radius: .25rem;
        }

        .search-box .search-btn span {
            display: none;
            font-weight: 500;
        }
    </style>
@endpush

<section class="section section-search">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <div class="banner-header text-center">
                <h1>?????????????? ??????????, ???????????????????? ???? ??????????</h1>
                <p>???????????????? ?????? ???????? ???????????? ????????????, ?????????????? ?? ???????????????? ?? ?????????????????? ?? ?????? ????????????.</p>
            </div>
            {{--            <div class="search-box">--}}
            {{--                <form action="search.html">--}}
            {{--                    <div class="form-group search-location">--}}
            {{--                        <input type="text" class="form-control" placeholder="?????????? ????????????">--}}
            {{--                        <span class="form-text">???????????????????????? ???????????? ????????????????????????????</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="form-group search-info">--}}
            {{--                        <input type="text" class="form-control" placeholder="?????????? ????????????, ????????????, ??????????????, ???????????????? ?? ??.??.">--}}
            {{--                        <span class="form-text">????????????: ?????????????????????????????????? ???????????? ?????? ???????????? ???? ???????????????? ???????????? ?? ??.??.</span>--}}
            {{--                    </div>--}}
            {{--                    <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>--}}
            {{--                </form>--}}
            {{--            </div>--}}
        </div>
    </div>

</section>
