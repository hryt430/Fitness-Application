<?php

namespace App\View\Components\Dashboard\Food;

use App\Models\Food;
use App\Models\FoodType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FoodForm extends Component
{
    public function __construct(
        public string $routeUrl,  // フォームの送信先URL
        public string $method,    // HTTPメソッド (POST, PUT など)
        public ?Food  $food = null,  // 編集時には既存の Food エントリ
    ){}

    public function render(): View|Closure|string
    {
        return view('components.dashboard.food.food-form');
    }

    public function foodTypes(): Collection{
        return FoodType::all();
    }
}
