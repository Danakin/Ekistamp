<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAdmin(User $user)
    {
        return $user->role === 'admin' ||
            $user->role === 'moderator' ||
            $user->role === 'author';
    }
}
