<template>
    <div
        v-if="!isHidden">
<!--        style="height: 100%"-->
<!--    >-->
<!--        <div-->
<!--            style="position: absolute;-->
<!--                left: 0;-->
<!--                top: 0;-->
<!--                opacity: 80%;-->
<!--                z-index: 10;-->
<!--                background-color: gray;-->
<!--                width: 100%;-->
<!--                height: 100%;-->
<!--        "-->
<!--            @click.stop="closeModal"-->
<!--        ></div>-->
        <div
            class="profile-modal-container"
            @click.stop="closeModal"
        >
            <div class="profile-modal-content"
                @click.stop
            >
                <div class="row book-content"

                >

                    <div class="col-md-12"
                    >
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image" src="https://via.placeholder.com/150">
                                    </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">{{ book.name ? book.name : book.user.name }}</h4>
                                    <h6 class="text-muted">{{ book.email ? book.email : book.user.email }}</h6>
<!--                                    <div class="user-Location"><i class="fas fa-map-marker-alt" id="specialist-location"></i></div>-->
                                    <div class="about-text" id="patient-description">{{ book.description }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="per_details_tab">

                                <!-- Personal Details -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Персональные данные</span>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">ФИО</p>
                                                    <p class="col-sm-10">{{ getFIO() }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Возраст</p>
                                                    <p class="col-sm-10">{{ book.age ? book.age : (book.user.age ? book.user.age : 'не указан') }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                                    <p class="col-sm-10">{{ book.email ? book.email : book.user.email }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3" id="patient-phone">Мобильный</p>
                                                    <p class="col-sm-10">{{ book.phone ? book.phone : (book.user.phone ? book.user.phone : 'не указан') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Personal Details -->
                            </div>
                            <!-- /Personal Details Tab -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ModalPatientInfo",
    props: {
        book: {
            type: Object,
        },
        isHidden: {
            type: Boolean,
            default: true
        }
    },
    methods: {
        closeModal(event) {
            this.$emit('close-modal')
            console.log('Закрываем модалку', event.target)
            console.dir(event.target)
        },
        getFIO() {
            let result = this.book.surname ? this.book.surname : this.book.user.surname
            result += ' ' + (this.book.name ? this.book.name : this.book.user.name)
            if (this.book.second_name) {
                result += ' ' + this.book.second_name
            } else if (this.book.user.second_name) {
                result += ' ' + this.book.user.second_name
            }
            return result
        }
    }
}
</script>

<style scoped>
.profile-modal-container {
    /*pointer-events: none;*/
    /*opacity: 80%;*/
    overflow: hidden;
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100vw;
    height: 100vh;
    padding: 30px;
    background-color: rgba(0, 0, 0, 0.6);
    transition: opacity .3s, background-color .5s;
}

/*body.not-scroll,*/
/*.is-open {*/
/*    overflow: hidden;*/
/*}*/
.profile-modal-content {
    overflow: auto;
    /*opacity: 0;*/
    width: 100%;
    height: 100%;
    max-width: 790px;
    max-height: 490px;
    padding: 20px;
    background-color: #fff;
    border-radius: 3px;
}
.profile-header {
    background-color: #fff;
    border: 1px solid #f0f0f0;
    padding: 1.5rem;
}
.profile-header img {
    height: auto;
    max-width: 120px;
    width: 120px;
}
.profile-tab-cont {
    padding-top: 1.875rem;
}
.about-text {
    max-width: 500px;
}
</style>
