<x-app-layout>
    <div class="py-40px">
        <div class="p-15px" style="min-height: 444px;">
            <div class="mx-15px mx-auto max-w-540 sm:max-w-720 md:max-w-1140">
                <x-doctor.card :specialist="$specialist"/>

                <div class="card p-40px">
                    <div class="card-body pt-0">
                        <x-doctor.nav />
                        @if($bookFeedback != null)
                            <x-feedback.new :specialist="$specialist" :bookFeedback="$bookFeedback"/>
                        @endif
                        <x-feedback.show :specialist="$specialist"/>
                        <x-doctor.about/>
                        <x-doctor.data/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
