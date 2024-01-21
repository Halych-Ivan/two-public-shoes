<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone' => 'nullable|string|max:20',
            'phone_1' => 'nullable|string|max:20',
            'phone_2' => 'nullable|string|max:20',
            'email' => 'nullable|string|max:255',
            'email_1' => 'nullable|string|max:255',
            'email_2' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_1' => 'nullable|string|max:255',
            'title_2' => 'nullable|string|max:255',
            'text' => 'nullable|string',
            'text_2' => 'nullable|string',
            'text_3' => 'nullable|string',
            'text_4' => 'nullable|string',
            'txt_1' => 'nullable|string|max:255',
            'txt_2' => 'nullable|string|max:255',
            'txt_3' => 'nullable|string|max:255',
            'txt_4' => 'nullable|string|max:255',
            'tit_1' => 'nullable|string|max:255',
            'tit_2' => 'nullable|string|max:255',
            'tit_3' => 'nullable|string|max:255',
            'tit_4' => 'nullable|string|max:255',

            'image' => 'nullable|mimes:png,jpg,jpeg,webp,csv,txt,xlx,xls,pdf,doc,docx,webp|max:2048',

//            'image_2' => 'nullable|mimes:png,jpg,jpeg,webp,csv,txt,xlx,xls,pdf,doc,docx,webp|max:2048',
//            'images' => 'nullable|mimes:png,jpg,jpeg,webp,csv,txt,xlx,xls,pdf,doc,docx,webp|max:2048',
//            'visibility' => 'nullable|string',
//            'category_id' => 'nullable|max:255',
//            'description' => 'nullable|string',
//            'rating' => 'nullable|numeric',
//            'price' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }
}
