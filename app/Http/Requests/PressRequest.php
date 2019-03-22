<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PressRequest extends FormRequest
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
            'title' => 'required',
            'src' => 'required',
            'link' => 'required',
            'date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please fill in the title of the article.',
            'src.required' => 'Please fill in the source name of the article.',
            'link.required' => 'Please fill in the url of the article.',
            'date.required' => 'Please fill in the date the article was published.',
        ];
    }
}
