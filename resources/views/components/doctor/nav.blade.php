<nav class="user-tabs mb-4">
    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
        <li class="nav-item nav-doctor-show">
            <a id="doc_overview" class="nav-link active" href="#" data-toggle="tab">Обзор</a>
        </li>
                {{--                        <li class="nav-item">--}}
                {{--                            <a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>--}}
                {{--                        </li>--}}
        <li class="nav-item nav-doctor-show">
            <a id="doc_reviews" class="nav-link" href="#" data-toggle="tab">Отзывы</a>
        </li>
        <li class="nav-item nav-doctor-show">
            <a id="doc_business_hours" class="nav-link" href="#doc_business_hours" data-toggle="tab">Рабочее время</a>
        </li>
    </ul>
</nav>

@push('scripts')
    <script>

        (function(){
            const feedbackModal = document.querySelector('#feedback_modal');
            const feedbackForm = document.querySelector('#feedback_form');
            const docOverview = document.querySelector('#doctor-overview');
            const businessHours = document.querySelector('#business_hours');
            const navItem = document.querySelectorAll('.nav-doctor-show');
            const navLinkReview = document.querySelector('#doc_reviews');
            const navLinkOverview = document.querySelector('#doc_overview');

            if (window.location.search.length !== 0) {
                docOverview.style.display = 'none';
                feedbackModal.style.display = 'block';
                feedbackForm.style.display = 'block';
                navLinkOverview.classList.remove('active');
                navLinkReview.classList.add('active');
            }


            navItem.forEach(function(item) {
                item.addEventListener('click', (e) => {
                    const id = e.target.id;

                    if(id === 'doc_reviews'){
                        feedbackModal.style.display = 'block';
                        docOverview.style.display = 'none';
                        businessHours.style.display = 'none';
                        if(feedbackForm){
                            feedbackForm.style.display = 'block';
                        }
                    } else if(id === 'doc_business_hours'){
                        feedbackModal.style.display = 'none';
                        docOverview.style.display = 'none';
                        businessHours.style.display = 'block';
                        if(feedbackForm){
                            feedbackForm.style.display = 'none';
                        }
                    } else{
                        feedbackModal.style.display = 'none';
                        docOverview.style.display = 'block';
                        businessHours.style.display = 'none';
                        if(feedbackForm){
                            feedbackForm.style.display = 'none';
                        }
                    }
                });
            })
        })();
    </script>
@endpush
