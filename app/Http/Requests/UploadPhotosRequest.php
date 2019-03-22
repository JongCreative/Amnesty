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
            'title' => 'required',
            'descr' => 'required',
            //'src.*' => 'required|mimes:jpeg,jpg|max:1999|min:1000',
        ];
    }

    public function messages()
    {
        return [
            'title'         => 'please enter a title',
            'descr'         => 'please enter a description',
            'src.required'  => 'no photo',
            'src.mimes'     => 'we only accept jpeg or jpg format',
            'src.max'       => 'max',
            'src.min'       => 'min',
        ];
    }
}
