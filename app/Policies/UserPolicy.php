<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/03/2019
 * Time: 20:59
 */

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserProfile;

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
        $perfis = self::retornaPerfil($user->id);

        foreach ($perfis as $perfil) {
            return 1 === $perfil->id_profile;
        }

    }

    private function retornaPerfil($idUser)
    {
        $perfis = UserProfile::where('id_user', $idUser)->get();
        return $perfis;
    }
}
