<?php

namespace App\Policies;

use App\Actionnair;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActionnairPolicy
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
     * @param  \App\Actionnair  $actionnair
     * @return mixed
     */
    public function view(User $user, Actionnair $actionnair)
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
     * @param  \App\Actionnair  $actionnair
     * @return mixed
     */
    public function update(User $user, Actionnair $actionnair)
    {
        return $user->id == $actionnair->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actionnair  $actionnair
     * @return mixed
     */
    public function delete(User $user, Actionnair $actionnair)
    {
        return $user->id == $actionnair->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actionnair  $actionnair
     * @return mixed
     */
    public function restore(User $user, Actionnair $actionnair)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Actionnair  $actionnair
     * @return mixed
     */
    public function forceDelete(User $user, Actionnair $actionnair)
    {
        //
    }
}
