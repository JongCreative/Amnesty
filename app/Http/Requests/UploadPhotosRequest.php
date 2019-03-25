<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadPhotosRequest extends FormRequest
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
            'src'       => 'required',
            'src.*'     => 'image|mimes:jpeg,jpg|max:5000|min:1000',
            'title'     => 'required',
            'descr'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'src.required'      => 'Please select a photo to join the contest',
            'src.mimes'         => 'we only accept jpeg or jpg format',
            'src.max'           => 'The photo should be smaller 5 MB',
            'src.min'           => 'The photo should be larger than 10 kb',
            'title.required'    => 'please enter a title',
            'descr.required'    => 'please enter a description',
        ];
    }
}
