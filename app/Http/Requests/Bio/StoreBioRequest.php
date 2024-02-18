<?php

namespace App\Http\Requests\Bio;

use Illuminate\Foundation\Http\FormRequest;

class StoreBioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
         'data' => ['nullable'],
         'photo' => ['required', 'image']
        ];
    }
}
