<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => '',
            'section' => '',
            'visibility' => '',
            'banner_id' => 'nullable|string|max:255',
            'image' => 'image|mimes:png,jpg,jpeg,webp,csv,txt,xlx,xls,pdf,doc,docx,webp|max:2048',
        ];
    }
}
