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

class UserPolicy
{
    /**
     * Determine if the given category can be updated by the user.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function isAdmin(User $user)
    {
        $perfis = self::retornaPerfil($user->id);

        foreach ($perfis as $perfil) {
            return 1 === $perfil->id_perfil;
        }

    }

    private function retornaPerfil($idUser)
    {
        $perfis = DB::select('SELECT * FROM ta_user_perfil  WHERE id_user =  ?', [
            $idUser
        ]);
        return $perfis;
    }
}
