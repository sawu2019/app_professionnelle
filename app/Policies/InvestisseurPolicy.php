<?php

namespace App\Policies;

use App\Investisseur;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvestisseurPolicy
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
     * @param  \App\Investisseur  $investisseur
     * @return mixed
     */
    public function view(User $user, Investisseur $investisseur)
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
     * @param  \App\Investisseur  $investisseur
     * @return mixed
     */
    public function update(User $user, Investisseur $investisseur)
    {
        //return $user->id == $investisseur->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Investisseur  $investisseur
     * @return mixed
     */
    public function delete(User $user, Investisseur $investisseur)
    {
        //return $user->id == $investisseur->user_id;
        return in_array($user->email,[
            'sawudimbunda@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Investisseur  $investisseur
     * @return mixed
     */
    public function restore(User $user, Investisseur $investisseur)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Investisseur  $investisseur
     * @return mixed
     */
    public function forceDelete(User $user, Investisseur $investisseur)
    {
        //
    }
}
