<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class FoodCards extends Component
{
    public function __construct(
        public LengthAwarePaginator $foodPaginator,
    ){}

    public function render(): View|Closure|string
    {
        return view('components.dashboard.food-cards');
    }

    /**
     *  フードカードの色をランダムに生成します
     */
    public function randomColor(): string{
        $colors = [
            'red', 'green', 'blue', 'yellow', 'indigo', 'purple', 'pink', 'gray','orange', 'amber', 'lime', 'emerald', 'teal', 'cyan','sky', 'violet', 'fuchsia', 'rose','stone','neutral'
        ];
        return $colors[array_rand($colors)];
    }
}