<template>
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="appointment-tab">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    :class="{'active': todayIsActive}"
                                    href="#"
                                    @click.prevent="filterToday"
                                >Сегодня</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    :class="{'active': !todayIsActive}"
                                    href="#"
                                    @click.prevent="filterFutureDays"
                                >Будущие</a>
                            </li>
                        </ul>
                        <div>
                            <div class="tab-pane show active" id="upcoming-appointments">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Имя пациента</th>
                                                    <th>Дата приема</th>
                                                    <th>Цель</th>
                                                    <th>Тип</th>
                                                    <th class="text-center">Стоимость</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody
                                                    class="align-middle"
                                                >
                                        <!--        @foreach($books as $book)-->
                                                <tr
                                                    v-for="book of filterBooks"
                                                    :key="'book-' + book.id"
                                                >
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#" v-if="book.user" data-trigger>{{ book.user.name + ' ' + book.user.surname }}</a>
                                                            <a href="#" v-else data-trigger>{{ book.name + ' ' + book.surname }}</a>

                                                        </h2>
                                                    </td>
                                                    <td> {{ new Date(book.datetime).toLocaleDateString() }}
                                                        <span class="d-block text-info">
                                                            {{ new Date(book.datetime).toLocaleTimeString() }}
                                                        </span>
                                                    </td>
                                                    <td>General</td>
                                                    <td class="text-center">{{ book.specialist.price }} </td>
                                                    <td class="text-right">
                                                        <div class="table-action">
                                                            <a :href="'/book/update/' + book.id"
                                                               v-if="!book.is_over"
                                                               class="btn btn-sm btn-primary">
                                                                <i class="fas fa-check"></i> Завершить прием
                                                            </a>
                                                            <a
                                                                data-book-id="$book->id"
                                                                href="#"
                                                                data-trigger
                                                                class="btn btn-sm btn-info"
                                                                @click.prevent="showModalInfo(book)"
                                                            >

                                                               <i class="far fa-eye"></i> Посмотреть
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <!--        @endforeach-->


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <modal-patient-info
                                :is-hidden="modalPatientIsHidden"
                                :book="currentBook"
                                @close-modal="closeModalInfo"
                            ></modal-patient-info>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ModalPatientInfo from "./ModalPatientInfo";
export default {
    name: "PatientList",
    components: {
        ModalPatientInfo
    },
    props: {
        books: {
            type: Object,
            default: {},
        }
    },
    data: () => ({
        currentBook: {},
        filterBooks: [],
        modalPatientIsHidden: true,
        todayIsActive: true
        // books: []
    }),
    mounted() {
        // this.books = JSON.parse(this.jsonBooks)
        console.log(this.books)
    },
    methods: {
        showModalInfo(book) {
            console.log(book)
            this.modalPatientIsHidden = false
            this.currentBook = book
        },
        closeModalInfo() {
            this.modalPatientIsHidden = true
            console.log('close')
        },
        filterToday() {
            const today = this.getDateFromDateTime()
            this.filterBooks = []

            for (let item in this.books) {
                if (this.getDateFromDateTime(this.books[item].datetime) === today) {
                    this.filterBooks.push(this.books[item])
                }
                console.log(this.books[item], today, this.getDateFromDateTime(this.books[item].datetime))
            }

            this.todayIsActive = true
        },
        filterFutureDays() {
            const today = this.getDateFromDateTime()
            this.filterBooks = []

            for (let item in this.books) {
                if (this.getDateFromDateTime(this.books[item].datetime) > today) {
                    this.filterBooks.push(this.books[item])
                }
                console.log(this.books[item], today, this.getDateFromDateTime(this.books[item].datetime))
            }

            this.todayIsActive = false
        },
        getDateFromDateTime(datetime) {
            let date = null
            if (!datetime) {
                date = new Date()
            } else {
                date = new Date(datetime)
            }

            date.setHours(0)
            date.setMinutes(0)
            date.setSeconds(0)
            return date
        }

    }
}
</script>

<style scoped>

</style>
