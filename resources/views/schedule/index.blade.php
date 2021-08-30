<x-app-layout>
<div class="main-wrapper">
    <div class="content" style="min-height: 444px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <x-schedule.card-mini :specialist="$specialist"></x-schedule.card-mini>
                    <schedule
                        :action="'{{route('schedule.info', compact('specialist'))}}'"
                        :link-next-week = "'{{ route('schedule.week.get', compact('specialist')) }}'"
                        :input-week="{{$week}}"
                    ></schedule>
                    @push('scripts')
                        <script src="{{ mix('js/schedule.js') }}" defer></script>
                    @endpush
{{--                    <x-schedule.schedule :specialist="$specialist"></x-schedule.schedule>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
