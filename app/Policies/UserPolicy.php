<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/03/2019
 * Time: 20:59
 */

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine if the user is admin.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function isAdmin(User $user)
    {
        return $user->profiles()->first()->id_profile === 1;
    }
}
