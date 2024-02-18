<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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
            'photo' => ['required', 'image'],
            'upload_date_bs' => ['required']
        ];
    }
}
