<?php

namespace App\Policies;

use App\Models\Food;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FoodPolicy
{
    /**
     * すべての食品エントリーを閲覧できるかの判定
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * 特定の食品エントリーを閲覧できるかの判定
     */
    public function view(User $user, Food $food): bool
    {
        return true;
    }

    /**
     * 新しい食品エントリーを作成できるかの判定
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * 食品エントリーを更新できるかの判定
     */
    public function update(User $user, Food $food): bool
    {
        return $user->id === $food->user_id;
    }

    /**
     * 食品エントリーを削除できるかの判定
     */
    public function delete(User $user, Food $food): bool
    {
        return $user->id === $food->user_id;
    }

    /**
     * 食品エントリーを復元できるかの判定
     */
    public function restore(User $user, Food $food): bool
    {
        return $user->id === $food->user_id;
    }

    /**
     * 食品エントリーを完全に削除できるかの判定
     */
    public function forceDelete(User $user, Food $food): bool
    {
        return $user->id === $food->user_id;
    }
}
