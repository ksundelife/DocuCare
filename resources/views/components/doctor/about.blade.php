@push('style')
    <style type="text/css" >
        body {
            background-color: #f8f9fa;
            color: #272b41;
            font-family: "Poppins", sans-serif;
            font-size: 0.9375rem;
            height: 100%;
            overflow-x: hidden;
            font-weight: 400;
            line-height: 1.5; }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #272b41;
            font-weight: 500;
        }
        .h4, h4 {
            font-size: 1.125rem;
        }
        p {
            margin-top: 0;
            margin-bottom: 1rem;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        a {
            color: #2E3842;
            text-decoration: none;
            background-color: transparent;
        }

        .container {
            max-width: 960px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .card {
            border: 1px solid #f0f0f0;
            margin-bottom: 1.875rem;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border-radius: 0.25rem; }
        .card-body {
            padding: 1.5rem;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
        }
        .pt-0, .py-0 {
            padding-top: 0!important;
        }
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-lg-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .widget {
            margin-bottom: 30px;
        }
        .widget-title {
            margin-bottom: 15px;
        }
        .experience-box {
            position: relative;
        }
        .experience-list {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .experience-list::before {
            background: #ddd;
            bottom: 0;
            content: "";
            left: 8px;
            position: absolute;
            top: 8px;
            width: 2px;
        }
        .experience-list > li {
            position: relative;
        }
        .experience-list > li .experience-user {
            background: #fff;
            height: 10px;
            left: 4px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 4px;
            width: 10px;
        }
        .experience-list > li .experience-content {
            background-color: #fff;
            margin: 0 0 20px 40px;
            padding: 0;
            position: relative;
        }
        .experience-list > li .experience-content .timeline-content {
            color: #757575;
        }
        .experience-list > li .experience-content .timeline-content a.name {
            font-weight: 500;
        }
        .before-circle {
            /*background-color: rgb(32 87 243 20%);*/
            border-radius: 50%;
            height: 12px;
            width: 12px;
            border: 2px solid #4498dc;
        }
        .service-list {
            margin-bottom: 30px;
        }
        .service-list ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .service-list ul li {
            float: left;
            margin: 6px 0;
            padding-left: 25px;
            position: relative;
            width: 33%;
        }
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }
        .service-list ul li::before {
            color: #ccc;
            content: '\f30b';
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            left: 0;
            position: absolute;
        }
    </style>
@endpush
{{--<div class="card p-40px">--}}
{{--    <div class="card-body pt-0">--}}
{{--                <nav class="user-tabs mb-4">--}}
{{--                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" href="#doc_overview" data-toggle="tab">Обзор</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#doc_reviews" data-toggle="tab">Отзывы</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#doc_business_hours" data-toggle="tab">Рабочее время</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
        <div class="tab-content pt-0">
            <div role="tabpanel" id="doctor-overview" class="tab-pane active">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="widget about-widget">
                            <h4 class="widget-title">About Me</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="widget education-widget">
                            <h4 class="widget-title">Education</h4>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">American Dental Medical University</a>
                                                <div>BDS</div>
                                                <span class="time">1998 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">American Dental Medical University</a>
                                                <div>MDS</div>
                                                <span class="time">2003 - 2005</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget experience-widget">
                            <h4 class="widget-title">Work &amp; Experience</h4>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Glowing Smiles Family Dental Clinic</a>
                                                <span class="time">2010 - Present (5 years)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Comfort Care Dental Clinic</a>
                                                <span class="time">2007 - 2010 (3 years)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Dream Smile Dental Practice</a>
                                                <span class="time">2005 - 2007 (2 years)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget awards-widget">
                            <h4 class="widget-title">Awards</h4>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <p class="exp-year">July 2020</p>
                                                <h4 class="exp-title">Humanitarian Award</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <p class="exp-year">March 2011</p>
                                                <h4 class="exp-title">Certificate for International Volunteer Service</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <p class="exp-year">May 2008</p>
                                                <h4 class="exp-title">The Dental Professional of The Year Award</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="service-list">
                            <h4>Services</h4>
                            <ul class="clearfix">
                                <li>Tooth cleaning </li>
                                <li>Root Canal Therapy</li>
                                <li>Implants</li>
                                <li>Composite Bonding</li>
                                <li>Fissure Sealants</li>
                                <li>Surgical Extractions</li>
                            </ul>
                        </div>
                        <div class="service-list">
                            <h4>Specializations</h4>
                            <ul class="clearfix">
                                <li>Children Care</li>
                                <li>Dental Care</li>
                                <li>Oral and Maxillofacial Surgery </li>
                                <li>Orthodontist</li>
                                <li>Periodontist</li>
                                <li>Prosthodontics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div role="tabpanel" id="doc_locations" class="tab-pane fade">
                <div class="location-list">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="clinic-content">
                                <h4 class="clinic-name"><a href="#">Smile Cute Dental Care Center</a></h4>
                                <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(4)</span>
                                </div>
                                <div class="clinic-details mb-0">
                                    <h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2286 Sundown Lane, Austin, Texas 78749, USA <br><a href="javascript:void(0);">Get Directions</a></h5>
                                    <ul>
                                        <li>
                                            <a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-01.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-02.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-03.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-04.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="clinic-timing">
                                <div>
                                    <p class="timings-days">
                                        <span> Mon - Sat </span>
                                    </p>
                                    <p class="timings-times">
                                        <span>10:00 AM - 2:00 PM</span>
                                        <span>4:00 PM - 9:00 PM</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="timings-days">
                                        <span>Sun</span>
                                    </p>
                                    <p class="timings-times">
                                        <span>10:00 AM - 2:00 PM</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="consult-price">
                                $250
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-list">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="clinic-content">
                                <h4 class="clinic-name"><a href="#">The Family Dentistry Clinic</a></h4>
                                <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(4)</span>
                                </div>
                                <div class="clinic-details mb-0">
                                    <p class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2883 University Street, Seattle, Texas Washington, 98155 <br><a href="javascript:void(0);">Get Directions</a></p>
                                    <ul>
                                        <li>
                                            <a href="assets/img/features/feature-01.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-01.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-02.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-02.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-03.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-03.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/img/features/feature-04.jpg" data-fancybox="gallery2">
                                                <img src="assets/img/features/feature-04.jpg" alt="Feature Image">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="clinic-timing">
                                <div>
                                    <p class="timings-days">
                                        <span> Tue - Fri </span>
                                    </p>
                                    <p class="timings-times">
                                        <span>11:00 AM - 1:00 PM</span>
                                        <span>6:00 PM - 11:00 PM</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="timings-days">
                                        <span>Sat - Sun</span>
                                    </p>
                                    <p class="timings-times">
                                        <span>8:00 AM - 10:00 AM</span>
                                        <span>3:00 PM - 7:00 PM</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="consult-price">
                                $350
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                <div class="widget review-listing">
                    <ul class="comments-list">

                        <li>
                            <div class="comment">
                                <img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Muneer Vickery</span>
                                        <span class="comment-date">Reviewed 2 Days ago</span>
                                        <div class="review-count rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>
                                    <p class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                        Curabitur non nulla sit amet nisl tempus
                                    </p>
                                    <div class="comment-reply">
                                        <a class="comment-btn" href="#">
                                            <i class="fas fa-reply"></i> Reply
                                        </a>
                                        <p class="recommend-btn">
                                            <span>Recommend?</span>
                                            <a href="#" class="like-btn">
                                                <i class="far fa-thumbs-up"></i> Yes
                                            </a>
                                            <a href="#" class="dislike-btn">
                                                <i class="far fa-thumbs-down"></i> No
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <ul class="comments-reply">
                                <li>
                                    <div class="comment">
                                        <img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Aliena Stauffer</span>
                                                <span class="comment-date">Reviewed 3 Days ago</span>
                                                <div class="review-count rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recommend?</span>
                                                    <a href="#" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> Yes
                                                    </a>
                                                    <a href="#" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> No
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </li>


                        <li>
                            <div class="comment">
                                <img class="avatar avatar-sm rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Yegor Aguirre</span>
                                        <span class="comment-date">Reviewed 4 Days ago</span>
                                        <div class="review-count rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                        Curabitur non nulla sit amet nisl tempus
                                    </p>
                                    <div class="comment-reply">
                                        <a class="comment-btn" href="#">
                                            <i class="fas fa-reply"></i> Reply
                                        </a>
                                        <p class="recommend-btn">
                                            <span>Recommend?</span>
                                            <a href="#" class="like-btn">
                                                <i class="far fa-thumbs-up"></i> Yes
                                            </a>
                                            <a href="#" class="dislike-btn">
                                                <i class="far fa-thumbs-down"></i> No
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class="all-feedback text-center">
                        <a href="#" class="btn btn-primary btn-sm">
                            Show all feedback <strong>(167)</strong>
                        </a>
                    </div>

                </div>


                <div class="write-review">
                    <h4>Write a review for <strong>Dr. Kalen Chavez</strong></h4>

                    <form>
                        <div class="form-group">
                            <label>Review</label>
                            <div class="star-rating">
                                <input id="star-5" type="radio" name="rating" value="star-5">
                                <label for="star-5" title="5 stars">
                                    <i class="active fa fa-star"></i>
                                </label>
                                <input id="star-4" type="radio" name="rating" value="star-4">
                                <label for="star-4" title="4 stars">
                                    <i class="active fa fa-star"></i>
                                </label>
                                <input id="star-3" type="radio" name="rating" value="star-3">
                                <label for="star-3" title="3 stars">
                                    <i class="active fa fa-star"></i>
                                </label>
                                <input id="star-2" type="radio" name="rating" value="star-2">
                                <label for="star-2" title="2 stars">
                                    <i class="active fa fa-star"></i>
                                </label>
                                <input id="star-1" type="radio" name="rating" value="star-1">
                                <label for="star-1" title="1 star">
                                    <i class="active fa fa-star"></i>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Title of your review</label>
                            <input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
                        </div>
                        <div class="form-group">
                            <label>Your review</label>
                            <textarea id="review_desc" maxlength="100" class="form-control"></textarea>
                            <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="terms-accept">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="terms_accept">
                                    <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
                        </div>
                    </form>

                </div>

            </div>
            <div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6 offset-md-3">

                        <div class="widget business-widget">
                            <div class="widget-content">
                                <div class="listing-hours">
                                    <div class="listing-day current">
                                        <div class="day">Today <span>5 Nov 2020</span></div>
                                        <div class="time-items">
                                            <span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Monday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Tuesday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Wednesday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Thursday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Friday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day">
                                        <div class="day">Saturday</div>
                                        <div class="time-items">
                                            <span class="time">07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="listing-day closed">
                                        <div class="day">Sunday</div>
                                        <div class="time-items">
                                            <span class="time"><span class="badge bg-danger-light">Closed</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>--}}
        </div>
{{--    </div>--}}

{{--</div>--}}
