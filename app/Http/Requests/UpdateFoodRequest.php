<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Food;

class UpdateFoodRequest extends FormRequest
{
    public function authorize(): bool
    {
        // ルートパラメータから食品オブジェクトを取得
        $food = $this->route('food');

        return $food && $this->user()->can('update', $food);
    }

    public function rules(): array
    {
        $foodId = $this->route('food') ? $this->route('food')->id : null;

        return [
            'name' => 'required|string|max:255|unique:food,name,' . $foodId,
            'protein' => 'required|numeric|min:0', 
            'carbs' => 'required|numeric|min:0',
            'fat' => 'required|numeric|min:0', 
            'grams' => 'required|numeric|min:0',  
            'food_type_name' => 'nullable|string|exists:food_types,name',
        ];
    }
}