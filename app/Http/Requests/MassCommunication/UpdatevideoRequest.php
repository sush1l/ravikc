<?php

namespace App\Http\Requests\MassCommunication;

use Illuminate\Foundation\Http\FormRequest;

class UpdatevideoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title_en' => ['required', 'string'],
            'title_ne' => ['required', 'string'],
            'upload_date_bs' => ['nullable'],
            'upload_date_ad' => ['nullable'],
            'des_ne' => ['required', 'string'],
            'des_en' => ['required', 'string'],
            'video' => ['required', 'url']
        ];
    }
}
