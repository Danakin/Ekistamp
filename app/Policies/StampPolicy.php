<?php

namespace App\Policies;

use App\Models\Stamp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StampPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stamp  $stamp
     * @return mixed
     */
    public function view(User $user, Stamp $stamp)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stamp  $stamp
     * @return mixed
     */
    public function update(User $user, Stamp $stamp)
    {
        //
        if ($user->role === 'admin' || $user->role === 'moderator') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stamp  $stamp
     * @return mixed
     */
    public function delete(User $user, Stamp $stamp)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stamp  $stamp
     * @return mixed
     */
    public function restore(User $user, Stamp $stamp)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Stamp  $stamp
     * @return mixed
     */
    public function forceDelete(User $user, Stamp $stamp)
    {
        //
    }
}
