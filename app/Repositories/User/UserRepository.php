<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Repositories\User;


use App\Interfaces\GenericInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements GenericInterface
{

    /**
     * Register new user
     * @param array $params
     * @return User
     */
    public function register($params)
    {
        $entity = new User([
            'tx_name_user' => $params->tx_name_user,
            'tx_email_user' => $params->tx_email_user,
            'tx_password_user' => Hash::make($params->tx_password_user),
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Edit user
     * @param array $params
     * @return User
     */
    public function edit($id, $params)
    {
        $entity = $this->retrieve($id);
        $entity->fill([
        'tx_name_user' => $params->tx_name_user,
        'tx_email_user' => $params->tx_email_user,
        'tx_password_user' => Hash::make($params->tx_password_user),
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Delete user
     * @param int $id
     * @return boolean
     */
    public function delete($id)
    {
        $entity = new User();
        $entity->tp_situation_user = 0;
        return $entity->save();
    }

    /**
     * List user
     * @param \stdClass $params
     * @return array
     */
    public function list($params=null)
    {
        $query = User::query();
        if (isset($params->tp_situation_user)) {
            $query->where('tp_situation_user', $params->tp_situation_user);
        }

        if (isset($params->tx_email_user)) {
            $query->where('tx_email_user', $params->tx_email_user);
        }

        if (isset($params->tx_name_user)) {
            $text = $params->tx_name_user;
            $query->where( function ($q2) use ( $text ) {
                $q2->where( 'tx_name_user', 'ilike', "%$text%" );
            });
        }
        $query->orderBy('tx_name_user');
        return $query->get();
    }

    /**
     * Retrieve user
     * @param int $id
     * @return User
     */
    public function retrieve($id)
    {
        return User::find($id);
    }
}