<?php

namespace App\Policies;

use App\Contrat;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContratPolicy
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
     * @param  \App\Contrat  $contrat
     * @return mixed
     */
    public function view(User $user, Contrat $contrat)
    {
        //return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //return $user->id > 0;
        return in_array($user->email,[
            'sawudimbunda@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Contrat  $contrat
     * @return mixed
     */
    public function update(User $user, Contrat $contrat)
    {
        //return $user->id == $contrat->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Contrat  $contrat
     * @return mixed
     */
    public function delete(User $user, Contrat $contrat)
    {
        //return $user->id == $contrat->user_id;
        return in_array($user->email,[
            'sawudimbunda@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Contrat  $contrat
     * @return mixed
     */
    public function restore(User $user, Contrat $contrat)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Contrat  $contrat
     * @return mixed
     */
    public function forceDelete(User $user, Contrat $contrat)
    {
        //
    }
}
