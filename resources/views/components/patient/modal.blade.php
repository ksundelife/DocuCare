{{--@props(['books'])--}}
@push('scripts')
    <script>
        (function(){
            const notScrollBody = document.querySelector('body');
            const modal = document.querySelector('.profile-modal-container');
            const closeButton = document.querySelector('.close-modal');
            const modalTriggers = document.querySelectorAll('[data-trigger]');
            let isModalOpen = false;
            modalTriggers.forEach(function(item) {
                item.addEventListener('click', (e) => {
                    modal.classList.add('is-open');
                    notScrollBody.classList.add('not-scroll');
                    const id = e.target.dataset.bookId;
                    console.log(id);

                    axios
                        .get(`/book/${id}/patient/get`)
                        .then(response => {
                            isModalOpen = true;
                            const book = response.data.book;
                            console.dir(document.querySelector('#patient-name'));
                            document.querySelector('#patient-name').textContent = (book.user ? book.user.name : book.name)+ ' ' + (book.user ? book.user.surname : book.surname);
                            document.querySelector('#patient-email').textContent = book.user ? book.user.email : book.email;
                            document.querySelector('#specialist-location').textContent = book.specialist.location;
                            document.querySelector('#patient-description').textContent = book.description;
                            document.querySelector('#patient-full-name').textContent = (book.user ? book.user.surname : book.surname)+ ' ' +(book.user ? book.user.name : book.name)+ ' ' +  (book.user ? book.user.second_name : book.second_name);
                            document.querySelector('#patient-age').textContent = book.age;
                            document.querySelector('#patient-email-double').textContent = book.user ? book.user.email : book.email;
                            document.querySelector('#patient-phone').textContent = book.phone;
                        })
                });
            })
            closeButton.addEventListener('click', () => {
                modal.classList.remove('is-open');
                notScrollBody.classList.remove('not-scroll');

            });
            document.querySelector('.book-content').addEventListener('click', (e) =>{
                e.stopPropagation();
            })
        })();

    </script>
@endpush
<div class="profile-modal-container close-modal">
    <div class="profile-modal-content book-content">
        <div class="row">

            <div class="col-md-12" >
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img class="rounded-circle" alt="User Image" src="img/patient.jpg">
                            </a>
                        </div>
                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-0" id="patient-name"></h4>
                            <h6 class="text-muted" id="patient-email"></h6>
                            <div class="user-Location"><i class="fas fa-map-marker-alt" id="specialist-location"></i></div>
                            <div class="about-text" id="patient-description"></div>
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
                                            <p class="col-sm-10" id="patient-full-name"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Возраст</p>
                                            <p class="col-sm-10" id="patient-age"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                            <p class="col-sm-10" id="patient-email-double"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3" id="patient-phone">Мобильный</p>
                                            <p class="col-sm-10"></p>
                                        </div>
                                        {{--                                        <div class="row">--}}
                                        {{--                                            <p class="col-sm-2 text-muted text-sm-right mb-0">Адрес</p>--}}
                                        {{--                                            <p class="col-sm-10 mb-0">4663  Agriculture Lane,<br>--}}
                                        {{--                                                Miami,<br>--}}
                                        {{--                                                Florida - 33165,<br>--}}
                                        {{--                                                United States.</p>--}}
                                        {{--                                        </div>--}}
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
@push('style')
    <style>
        .profile-modal-container {
            opacity: 0;
            position: fixed;
            z-index: -1;
            left: 0;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0);
            transition: opacity .3s, background-color .5s;
        }
        .is-open {
            opacity: 1;
            pointer-events: all;
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.5);
        }
        body.not-scroll,
        .is-open {
            overflow: hidden;
        }
        .profile-modal-content {
            overflow: auto;
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
@endpush
