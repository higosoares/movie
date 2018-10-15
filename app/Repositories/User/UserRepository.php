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
use stdClass;

class UserRepository implements GenericInterface
{

    /**
     * Register new user
     * @param stdClass $params
     * @return User
     */
    public function register($params)
    {
        $entity = new User([
            'name' => $params->name,
            'email' => $params->email,
            'password' => Hash::make($params->password),
            'situation' => 1,
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Edit user
     * @param stdClass $params
     * @return User
     */
    public function edit($id, $params)
    {
        $entity = $this->retrieve($id);
        $entity->fill([
            'name' => $params->name,
            'email' => $params->email,
        ]);
        if ($params->password != null){
            $entity->fill([
                'password' => Hash::make($params->password),
            ]);
        }
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
        $entity->situation = 0;
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
        if (isset($params->situation)) {
            $query->where('situation', $params->situation);
        }

        if (isset($params->email)) {
            $query->where('email', $params->email);
        }

        if (isset($params->name)) {
            $text = $params->name;
            $query->where( function ($q2) use ( $text ) {
                $q2->where( 'name', 'ilike', "%$text%" );
            });
        }
        $query->orderBy('name');
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