<?php

namespace App\Policies;

use App\Operat;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OperatPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Operat  $operat
     * @return mixed
     */
    public function view(User $user, Operat $operat)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id > 0;
        
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Operat  $operat
     * @return mixed
     */
    public function update(User $user, Operat $operat)
    {
        return $user->id == $operat->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Operat  $operat
     * @return mixed
     */
    public function delete(User $user, Operat $operat)
    {
        return $user->id == $operat->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Operat  $operat
     * @return mixed
     */
    public function restore(User $user, Operat $operat)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Operat  $operat
     * @return mixed
     */
    public function forceDelete(User $user, Operat $operat)
    {
        //
    }
}
