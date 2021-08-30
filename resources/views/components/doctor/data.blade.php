<div role="tabpanel" id="business_hours" class="tab-pane" style="display:none;">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="widget business-widget">
                <div class="widget-content">
                    <div class="listing-hours">
                        <div class="listing-day current">
                            <div class="day">Сегодня <span>15 Июля 2021</span></div>
                            <div class="time-items">
                                <span class="open-status"><span class="badge bg-success-light">Открыто</span></span>
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Понедельник</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Вторник</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Среда</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Четверг</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Пятница</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day">
                            <div class="day">Суббота</div>
                            <div class="time-items">
                                <span class="time">07:00 - 21:00</span>
                            </div>
                        </div>
                        <div class="listing-day closed">
                            <div class="day">Воскресенье</div>
                            <div class="time-items">
                                <span class="time"><span class="badge bg-danger-light">Закрыто</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@push('style')
    <style>
        .business-widget {
            background-color: #fcfcfc;
            border: 1px solid #f0f0f0;
            padding: 20px;
            margin-bottom: 0;
        }
        .listing-day {
            align-items: flex-start;
            color: #000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .listing-day:last-child {
            margin-bottom: 0;
        }
        .listing-day.current {
            border-bottom: 1px solid #ddd;
            padding-bottom: 13px;
            margin-bottom: 13px;
        }
        .listing-day .day {
            font-weight: 500;
        }
        .listing-day.current .day {
            font-weight: bold;
        }
        .listing-day.current .day span {
            display: block;
            font-weight: normal;
        }
        .time-items {
            color: #757575;
        }
        .time-items > span {
            display: block;
            text-align: right;
        }
        .time-items > span.open-status {
            margin-bottom: 3px;
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .bg-success-light {
            background-color: rgba(15, 183, 107,0.12) !important;
            color: #26af48 !important;
        }
        .bg-danger-light {
            background-color: rgba(242, 17, 54,0.12) !important;
            color: #e63c3c !important;
        }

    </style>

@endpush
