<?php

namespace App\Http\Requests\MassCommunication;

use Illuminate\Foundation\Http\FormRequest;

class StoreAudioRequest extends FormRequest
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
            'description_ne' => ['nullable'] ,
            'description_en' => ['nullable'] ,
            'upload_date_ad' => ['required'] ,
            'upload_date_bs' => ['required'] ,
            'file' => ['required','mimes:mp3,wav']
        ];
    }
}
