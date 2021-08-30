<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['integer'],
            'user_id' => ['integer'],
            'book_id' => ['unique:feedbacks','integer'],
            'name' => ['string','max:100'],
            'surname' => ['string','max:100'],
            'body_text' => ['string'],
            'specialist_id' => ['required','max:200'],
            'value' => ['numeric','min:0','max:5'],
        ];
    }
}
