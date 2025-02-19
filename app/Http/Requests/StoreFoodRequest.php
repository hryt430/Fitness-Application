<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Food;

class StoreFoodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('create', Food::class);
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:food,name', 
            'protein' => 'required|numeric|min:0', 
            'carbs' => 'required|numeric|min:0', 
            'fat' => 'required|numeric|min:0', 
            'grams' => 'required|numeric|min:0',
            'food_type_name' => 'nullable|string|exists:food_types,name', 
        ];
    }
}