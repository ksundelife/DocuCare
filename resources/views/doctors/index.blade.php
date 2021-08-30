<x-app-layout>
    <div class="bg-div-gray-200 p-80px">
        <Specialists-List
            :doctors="{{ json_encode($doctors) }}"
            routedoctor="{{ route('doctors.show', ["specialist" => "xxx"]) }}"
            routeshedule="{{ route('schedule.index', ["specialist" => "xxx"]) }}"
        />
    </div>

    @push('scripts')
        <script src="{{ mix('js/specialistsList.js') }}" defer></script>
    @endpush
</x-app-layout>
