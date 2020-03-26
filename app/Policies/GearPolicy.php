<?php

namespace App\Policies;

use App\User;
use App\Gear;
use Illuminate\Auth\Access\HandlesAuthorization;

class GearPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any gears.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the gear.
     *
     * @param  \App\User  $user
     * @param  \App\Gear  $gear
     * @return mixed
     */
    public function view(User $user, Gear $gear)
    {
        return true;
    }

    /**
     * Determine whether the user can create gears.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the gear.
     *
     * @param  \App\User  $user
     * @param  \App\Gear  $gear
     * @return mixed
     */
    public function update(User $user, Gear $gear)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the gear.
     *
     * @param  \App\User  $user
     * @param  \App\Gear  $gear
     * @return mixed
     */
    public function delete(User $user, Gear $gear)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the gear.
     *
     * @param  \App\User  $user
     * @param  \App\Gear  $gear
     * @return mixed
     */
    public function restore(User $user, Gear $gear)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the gear.
     *
     * @param  \App\User  $user
     * @param  \App\Gear  $gear
     * @return mixed
     */
    public function forceDelete(User $user, Gear $gear)
    {
        return true;
    }
}
