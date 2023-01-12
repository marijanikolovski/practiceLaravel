<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Post;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function create(User $user)
    {
        return $user->id === 1;
    }

    public function update(User $user, Post $post)
    {
        return $user->id === 1;
    }

    public function delete(User $user, Post $post)
    {
        return $user->id === 1;
    }
}
