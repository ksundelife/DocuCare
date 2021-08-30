@props(['user'])
<div class="page-wrapper">
    <div class="content container-fluid book-content">
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
                            <h4 class="user-name mb-0">{{ $user->name }}</h4>
                            <h6 class="text-muted" >{{ $user->email }}</h6>
                            <div class="user-Location"><i class="fas fa-map-marker-alt" ></i></div>
                            <div class="about-text">Москва</div>
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
                                            <p class="col-sm-10">{{ $user->getFullName()  }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Возраст</p>
                                            <p class="col-sm-10">01.01.2001</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                            <p class="col-sm-10">{{ $user->email }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Мобильный</p>
                                            <p class="col-sm-10">+7 (999) 123-75-86</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0">Адрес</p>
                                            <p class="col-sm-10 mb-0">4663  Agriculture Lane,<br>
                                                Miami,<br>
                                                Florida - 33165,<br>
                                                United States.</p>
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

        <!-- Edit Details Modal -->
        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered profile-modal-content book-content" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Персональные данные</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text"  class="form-control" value="Doe">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control" value="24-07-1983">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" value="johndoe@example.com">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" value="+1 202-555-0125" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="4663 Agriculture Lane">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="Miami">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="Florida">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" value="22434">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="United States">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Details Modal -->
    </div>
</div>
@push('style')
    <style>
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
