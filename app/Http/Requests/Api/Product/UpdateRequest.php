<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'min:2', 'max:25'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'integer'],
            'stock' => ['required', 'integer'],
        ];
    }
}
