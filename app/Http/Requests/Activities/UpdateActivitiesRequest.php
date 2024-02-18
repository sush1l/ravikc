<?php

namespace App\Http\Requests\Activities;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActivitiesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title_ne' => ['required', 'string'] ,
            'title_en' => ['required', 'string'] ,
            'desc_ne' => ['nullable'] ,
            'desc_en' => ['nullable'] ,
            'upload_date_ad' => ['required'] ,
            'upload_date_bs' => ['required'] ,
            'photo' => ['required', 'image']
        ];
    }
}
