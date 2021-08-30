
@push('scripts')
    <script src="{{ mix('js/schedule.js') }}" defer></script>
    <script>
        const datepicker = document.querySelector('#daterangepicker')
        datepicker.addEventListener('click', (event) => {
            const datepickerBox = document.querySelector('#daterangepicker_box')
            datepickerBox.style.left = datepicker.offsetLeft + 'px'
            datepickerBox.style.top = datepicker.offsetTop + datepicker.clientHeight + 'px'

            if (datepickerBox.style.display === 'none') {

                datepickerBox.style.display = 'block'
            }else{
                datepickerBox.style.display = 'none'
            }
        })
    </script>
@endpush
<!-- Schedule Widget -->

<!-- /Schedule Widget -->

<!-- Submit Section -->
{{--<div class="submit-section proceed-btn text-right">--}}
{{--    <a href="{{route('schedule.info')}}" id="appointment" class="btn btn-primary submit-btn booking-btn">Записаться</a>--}}
{{--</div>--}}
<form action="{{route('schedule.info',compact('specialist'))}}" method="get" class="submit-section proceed-btn text-right">
    <input type="datetime-local" name="datetime">
    <input type="submit" class="btn btn-primary submit-btn booking-btn" value="Записаться">
</form>
<!-- /Submit Section -->

{{--@push('scripts')
    <script>
        document.querySelector('#appointment').addEventListener('click', (event) => {
            alert('Вы успешно записаны')
            event.preventDefault()
        })
    </script>
@endpush--}}
