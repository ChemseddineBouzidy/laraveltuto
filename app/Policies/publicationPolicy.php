<?php

namespace App\Policies;

use App\Models\Publication;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\GenericUser;

class publicationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Publication $publication)
    {
        //

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(GenericUser $user, Publication $publication)
    {
         // verify if id user === piblication user id
        return $user->id == $publication->profile_id;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(GenericUser $user, Publication $publication)
    {
        //
        return $user->id == $publication->profile_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Publication $publication)
    {
        //
        
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Publication $publication)
    {
        //
    }
    // public function before(User $user,  $ability){

    //       return $user->isAdministrator();
    // }   
    
}
