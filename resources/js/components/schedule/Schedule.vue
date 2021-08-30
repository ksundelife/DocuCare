<template>
    <div class="mb-4">
        <schedule-calendar-header/>

        <div class="card booking-schedule schedule-widget">
            <!-- Schedule Header -->
            <div class="schedule-header">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Day Slot -->
                        <div class="day-slot">
                            <ul>
                                <li
                                    class="left-arrow"
                                >
                                    <a href="#"
                                       :class="{ 'disabled': currentWeekIdx === 0 }"
                                       @click.prevent="backWeek"
                                    >
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li
                                    v-for="(dayOfWeek, weekIdx) in [0, 1, 2, 3, 4, 5, 6]"
                                    :key="'week-' + weekIdx"
                                >
                                    <span>{{ weekDay(dayOfWeek) }}</span>
                                    <span class="slot-date">{{ formatDate(new Date(week.date).setDate(new Date(week.date).getDate() + dayOfWeek )) }}</span>
                                </li>
                                <li class="right-arrow">
                                    <a href="#"
                                       @click.prevent="nextWeek"
                                    >
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Day Slot -->
                    </div>
                </div>
            </div>
            <!-- /Schedule Header -->
            <!-- Schedule Content -->
            <div class="schedule-cont">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Time Slot -->
                        <div class="time-slot">
                            <ul class="clearfix">
                                <li
                                    v-for="(day, dayIdx) in week.times"
                                    :key="'day-' + dayIdx"
                                >
                                    <span
                                        v-if="!day.length"
                                        class="timing bg-danger text-white"
                                    >Не приёмный день</span>
                                    <a
                                        v-else
                                        v-for="(time, timeIdx) in day"
                                        :key="'time-' + dayIdx + '-' + timeIdx"
                                        class="timing"
                                        :class="{
                                            'selected': actionCurrentTime === time.action,
                                            'disabled': !timeIsFree(dayIdx, time)
                                        }"
                                        href="#"
                                        @click.prevent="checkTime(time.action)"
                                    >
                                        <span>{{ time.time }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Time Slot -->
                    </div>
                </div>
            </div>
            <!-- /Schedule Content -->
        </div>
        <input
            type="submit"
            class="btn submit-btn btn-outline-primary"
            :disabled="actionCurrentTime === ''"
            value="Записаться"
            @click="toCheckIn"
        >
    </div>

</template>

<script>
import ScheduleCalendarHeader from "./ScheduleCalendarHeader";
export default {
    name: "Schedule",
    components: {
        ScheduleCalendarHeader
    },
    props: {
        action: {
            type: String,
            required: true
        },
        linkNextWeek: {
            type: String,
            required: true
        },
        inputWeek: {
            type: Object,
            default: {},
        },
    },
    data: () => ({
        currentMonday: null,
        weeks: [],
        currentWeekIdx: 0,
        currentTimeIdx: null,
        currentDayIdx: null,
        // countWeeks: 10,
        currentDateTime: null,
        nowDayIdx: 0,
        actionCurrentTime: ''
    }),
    created() {

        const now = new Date()
        const monday = new Date()
        if ( now.getDay() !== 1 ) {
            monday.setDate( now.getDate() - now.getDay() + 1 )
        }
        this.currentMonday = this.inputWeek.date
        this.weeks.push(this.inputWeek)
        this.nowDayIdx = now.getDay();
    },
    methods: {
        formatDate (day, delta) {
            return new Intl.DateTimeFormat('ru', { day: 'numeric', month: 'short', year: 'numeric' }).format(day)
        },
        weekDay(dayOfWeek) {
            const day = new Date(this.week.date)
            day.setDate(day.getDate() + dayOfWeek)
            return new Intl.DateTimeFormat('ru', { weekday: 'short' }).format(day)
        },
        checkTime(datetime) {
            this.actionCurrentTime = datetime
        },
        nextWeek() {
            this.actionCurrentTime = ''
            this.currentDayIdx = null
            if (!this.weeks[this.currentWeekIdx + 1]) {
                axios
                    .get(this.linkNextWeek + `?monday=${this.weeks[this.currentWeekIdx].nextMonday}`)
                    .then(({ data }) => {
                        this.weeks.push(data)
                        this.currentWeekIdx++
                        console.log(data)
                    })
            } else {
                this.currentWeekIdx++
            }

            console.log(this.currentWeekIdx)
        },
        backWeek() {
            this.currentTimeIdx = null
            this.currentDayIdx = null
            this.currentWeekIdx--
        },
        toCheckIn() {
            window.location.href = this.action + '?datetime=' + this.actionCurrentTime
        },
        timeIsFree(dayIdx, timeObj) {
            console.log(timeObj)
            if (!timeObj.is_free) return false

            const datetime = new Date(this.week.date)
            datetime.setDate(datetime.getDate() + dayIdx)
            console.log(datetime)

            return datetime > new Date()
        }
    },
    computed:{
        week() {
            return this.weeks[this.currentWeekIdx]
        }
    }
}
</script>

<style scoped>

a.disabled {
    pointer-events: none;
    color: gray;
}

a.disabled:hover {
    color: gray;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

/*box*/

.daterangepicker {
    position: absolute;
    color: inherit;
    background-color: #fff;
    width: 150px;
    border-radius: 4px;
    border: 1px solid #ddd;
    max-width: none;
    padding: 0;
    margin-top: 7px;
    top: 100px;
    left: 20px;
    z-index: 3001;
    font-size: 15px;
    line-height: 1em;
}

.daterangepicker::before {
    position: absolute;
    display: inline-block;
    border-bottom-color: rgba(0, 0, 0, 0.2);
    content: '';
}

.daterangepicker::before {
    left: 6px;
    top: -6px;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #fff;
    border-left: 6px solid transparent;
}

.daterangepicker .ranges ul {
    list-style: none;
    margin: 0 auto;
    padding: 0;
}

.daterangepicker .ranges li {
    font-size: 12px;
    padding: 8px 12px;
    cursor: pointer;
}

.daterangepicker .ranges li:hover {
    background-color: #eee;
}

.daterangepicker .ranges li.active {
    background-color: #08c;
    color: #fff;
}

/*-----------------
    3. Booking_Schedule
-----------------------*/
.schedule-widget {
    border-radius: 4px;
    min-height: 100px;
}

.schedule-header h4 {
    font-size: 18px;
    font-weight: 600;
    margin: 3px 0 0;
}

.schedule-header {
    border-bottom: 1px solid #f0f0f0;
    border-radius: 4px 4px 0 0;
    padding: 10px 20px;
}

.day-slot ul {
    float: left;
    list-style: none;
    margin-bottom: 0;
    margin-left: -5px;
    margin-right: -5px;
    padding: 0;
    position: relative;
    width: 100%;
}

.day-slot li {
    float: left;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
    width: 14.28%;
}

.day-slot li span {
    display: block;
    font-size: 18px;
    text-transform: uppercase;
}

.day-slot li span.slot-date {
    display: block;
    color: #757575;
    font-size: 14px;
}

.day-slot li small.slot-year {
    color: #757575;
    font-size: 14px;
}

.day-slot li.left-arrow {
    left: 0;
    padding: 0;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 20px !important;
    transform: translateY(-50%);
}

.day-slot li.right-arrow {
    right: -11px;
    padding: 0;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 20px !important;
    transform: translateY(-50%);
}

.schedule-cont {
    padding: 20px;
}

.time-slot ul {
    list-style: none;
    margin-right: -5px;
    margin-left: -5px;
    margin-bottom: 0;
    padding: 0;
}

.time-slot li {
    float: left;
    padding-left: 5px;
    padding-right: 5px;
    width: 14.28%;
}

.time-slot li .timing {
    background-color: #e9e9e9;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
    color: #757575;
    display: block;
    font-size: 14px;
    margin-bottom: 10px;
    padding: 5px 5px;
    text-align: center;
    position: relative;
}

.time-slot li .timing:hover {
    background-color: #fff;
}

.time-slot li .timing:last-child {
    margin-bottom: 0;
}

.time-slot li .timing.selected {
    background-color: #4890cb;
    border: 1px solid #4890cb;
    color: #fff;
}

.time-slot li .timing.selected::before {
    color: #fff;
    /*content: "00c";*/
    font-family: "Font Awesome 5 Free";
    font-size: 12px;
    font-weight: 900;
    position: absolute;
    right: 6px;
    top: 6px;
}

.time-slot li .disabled {
    pointer-events: none;
    background-color: darkgray;
}

.time-slot li .disabled:hover {
    color: gray;
}

.submit-section.proceed-btn {
    margin: 0 0 30px;
}

.text-right {
    text-align: right !important;
}

@media (min-width: 1400px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: 1320px;
    }
}

</style>
