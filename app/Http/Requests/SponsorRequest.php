<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorRequest extends FormRequest
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
            'name' => 'required',
            'contribution' => 'required',
            'logo' => 'max:1024|Mimes:jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please fill in the name of the sponsor.',
            'contribution.required' => 'Please fill how the sponsor contributed.',
            'logo.max' => 'Your logo is too large, must be less than :max kb.',
            'logo.Mimes' => 'We only accept :values.',
        ];
    }
}
