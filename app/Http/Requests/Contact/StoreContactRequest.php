<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['reuired', 'string'],
            'contact_no' => ['reuired', 'string'],
            'email' => ['reuired', 'email'],
            'message' => ['reuired', 'string'],
        ];
    }
}
