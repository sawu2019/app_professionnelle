<?php

namespace App\Policies;

use App\Titrem;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TitremPolicy
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
     * @param  \App\Titrem  $titrem
     * @return mixed
     */
    public function view(User $user, Titrem $titrem)
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
     * @param  \App\Titrem  $titrem
     * @return mixed
     */
    public function update(User $user, Titrem $titrem)
    {
        //return $user->id == $titrem->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Titrem  $titrem
     * @return mixed
     */
    public function delete(User $user, Titrem $titrem)
    {
        //return $user->id == $titrem->user_id;
        return in_array($user->email,[
            'sawudimbunda@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Titrem  $titrem
     * @return mixed
     */
    public function restore(User $user, Titrem $titrem)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Titrem  $titrem
     * @return mixed
     */
    public function forceDelete(User $user, Titrem $titrem)
    {
        //
    }
}
