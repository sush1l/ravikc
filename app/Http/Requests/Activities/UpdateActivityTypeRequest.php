<?php

namespace App\Http\Requests\Activities;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActivityTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_ne' => ['required', 'string'],
            'title_en' => ['required', 'string'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
