<template>
    <div>
        <div class="row pt-40px">
            <div class="col-12 col-sm-4 col-md-6">
                <h4 class="mb-1 h4">
                    {{ new Intl.DateTimeFormat('ru', { day: 'numeric', month: 'long', year: 'numeric' }).format(new Date()) }}
                </h4>
                <p class="text-muted h4">
                    {{ new Intl.DateTimeFormat('ru', { weekday: 'long' }).format(new Date()).toUpperCase() }}
                </p>
            </div>
<!--            <div class="col-12 col-sm-8 col-md-6 text-right">-->
<!--                <div id="daterangepicker" class="btn btn-white btn-sm mb-3 border-dark bg-white">-->
<!--                    <i class="far fa-calendar-alt mr-2"></i>-->
<!--                    <span>Июль 05, 2021 - Июль 11, 2021</span>-->
<!--                    <i class="fas fa-chevron-down ml-2"></i>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!--        <div id="daterangepicker_box" class="daterangepicker" style="display: none;">-->
<!--            <div class="ranges">-->
<!--                <ul>-->
<!--                    <li v-for="week of weeks" :key="week">-->
<!--                        {{ weekToString(week) }}-->
<!--                    </li>-->
<!--                    <li>Следующая неделя</li>-->
<!--                    <li class="active">Last 7 Days</li>-->
<!--                    <li>Last 30 Days</li>-->
<!--                    <li>This Month</li>-->
<!--                    <li>Last Month</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</template>

<script>

export default {
    name: "ScheduleCalendarHeader",
    data: () => ({
        weeks: [],
        e1: 'Florida',
        e2: 'Texas',
        e3: null,
        e4: null,
        items: [
            { text: 'State 1' },
            { text: 'State 2' },
            { text: 'State 3' },
            { text: 'State 4' },
            { text: 'State 5' },
            { text: 'State 6' },
            { text: 'State 7' },
        ],
        states: [
            'Alabama', 'Alaska', 'American Samoa', 'Arizona',
            'Arkansas', 'California', 'Colorado', 'Connecticut',
            'Delaware', 'District of Columbia', 'Federated States of Micronesia',
            'Florida', 'Georgia', 'Guam', 'Hawaii', 'Idaho',
            'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
            'Louisiana', 'Maine', 'Marshall Islands', 'Maryland',
            'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi',
            'Missouri', 'Montana', 'Nebraska', 'Nevada',
            'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
            'North Carolina', 'North Dakota', 'Northern Mariana Islands', 'Ohio',
            'Oklahoma', 'Oregon', 'Palau', 'Pennsylvania', 'Puerto Rico',
            'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee',
            'Texas', 'Utah', 'Vermont', 'Virgin Island', 'Virginia',
            'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',
        ],
    }),
    created() {
        // const now = new Date();
        // const monday = new Date()
        // if ( now.getDay() !== 1 ) {
        //     monday.setDate( now.getDate() - now.getDay() + 1 )
        // }
        // console.log(monday);
        // for ( let i = 0 ; i < 6; i++) {
        //     this.weeks.push(new Date((new Date()).setDate(monday.getDate() + i * 7)))
        //     console.log(this.weeks[i])
        // }
    },
    methods: {
        weekToString(monday) {
            let result = new Intl.DateTimeFormat('ru', { day: 'numeric', month: 'long', year: 'numeric' })
                .format(new Date(monday)) + ' - '
            result += new Intl.DateTimeFormat('ru', { day: 'numeric', month: 'long', year: 'numeric' })
                .format(new Date().setDate(monday.getDate() + 6))
            return  result
        }
    }
}
</script>

<style scoped>

</style>
