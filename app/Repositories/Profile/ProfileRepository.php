<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Repositories\Profile;

use App\Interfaces\GenericInterface;
use App\Models\Profile;
use stdClass;

class ProfileRepository implements GenericInterface
{

    /**
     * Register new profile
     * @param stdClass $params
     * @return Profile
     */
    public function register($params)
    {
        $entity = new Profile([
            'tx_name_profile' => $params->tx_name_profile
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Edit profile
     * @param stdClass $params
     * @return Profile
     */
    public function edit($id, $params)
    {
        $entity = $this->retrieve($id);
        $entity->fill([
            'tx_name_profile' => $params->tx_name_profile
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Delete profile
     * @param int $id
     * @return boolean
     */
    public function delete($id)
    {
        $entity = new Profile();
        return $entity->save();
    }

    /**
     * List profile
     * @param \stdClass $params
     * @return array
     */
    public function list($params=null)
    {
        $query = Profile::query();
        if (isset($params->tx_name_profile)) {
            $text = $params->tx_name_profile;
            $query->where( function ($q2) use ( $text ) {
                $q2->where( 'tx_name_profile', 'ilike', "%$text%" );
            });
        }
        $query->orderBy('tx_name_profile');
        return $query->get();
    }

    /**
     * Retrieve profile
     * @param int $id
     * @return Profile
     */
    public function retrieve($id)
    {
        return Profile::find($id);
    }
}
