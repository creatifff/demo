<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'year' => 'required|numeric|min:2001',
            'price' => 'required|numeric|min:1',
            'country' => 'required|min:3',
            'image_path' => 'required|mimes:jpg,png,webp,jpeg,svg|max:5000',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
