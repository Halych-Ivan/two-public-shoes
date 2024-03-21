<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'active' => 'nullable|string|max:2',
            'info' => 'nullable|string|max:255',
        ];
    }
}
