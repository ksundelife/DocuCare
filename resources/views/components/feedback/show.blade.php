<?php
/**
 * @var Specialist $specialist
 */

use App\Models\Specialist;
//dd($specialist->feedbacks);
?>
        <div id="feedback_modal" style="display:none;">
            <h4 class="widget-title mb-4">Отзывы о
                <span class="text-gray-500">{{ $specialist->getNameAndSurname()}}</span>
            </h4>
                @if($specialist->feedbacks->count() !== 0)
                    @foreach($specialist->feedbacks as $oneFeedback)
                        <?php
                        /**
                         * @var \App\Models\Feedback $oneFeedback
                         */
                        ?>
                        <p class="border-top pt-4 text-xs text-gray-400">{{ $oneFeedback->created_at }}</p>
                        <p class="text-gray-700">От: {{ $oneFeedback->getNameAndSurname() }}</p>
    {{--                    <p class="text-gray-700">{{ $oneFeedback->value }}</p>--}}
                        <div class="rating">
                            @for($i = 0; $i < 5; $i++)
                                @if(($i < $oneFeedback->value) && ($oneFeedback->value !== 0))
                                    <i class="fas fa-star filled"></i>
                                @else
                                    <i class="fas fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <p class="text-gray-700">{{ $oneFeedback->body_text }}</p>
                    @endforeach
                @else
                    <p class="mt-5 text-gray-500 text-xl-center">Здесь пока нет ни одного отзыва :)</p>
                @endif
        </div>
