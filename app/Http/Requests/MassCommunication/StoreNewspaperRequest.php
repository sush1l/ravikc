<?php

namespace App\Http\Requests\MassCommunication;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewspaperRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title_en'  => ['required', 'string'],
            'title_ne'  => ['required', 'string'],
            'photo'=> ['required', 'image'],
            'des_ne' => ['nullable'],
            'des_en' => ['nullable'],
            'upload_date_bs'=> ['required'],
            'upload_date_ad'=> ['required']
        ];
    }
}
