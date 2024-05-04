<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA.',
            'contact.required' => 'Phone number must be of 10 digits.'
        ];
    }
}
