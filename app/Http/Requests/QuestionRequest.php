<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuestionRequest extends Request
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
            'question'          => 'required',
            'option_A'          => 'required',
            'option_B'          => 'required',
            'option_C'          => 'required',
            'option_D'          => 'required',
            'answer'            => 'required|alpha|max:1|min:1',
            'category'          => 'required|in:history,sports,science,literature,politics',
            'difficulty_rating' => 'required|integer|between:1,5'
        ];
    }
}
