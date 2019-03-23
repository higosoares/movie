<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 23/03/2019
 * Time: 03:12
 */

namespace App\Services\Profile;

use App\Models\Profile;
use App\Repositories\Profile\ProfileRepository;
use App\Services\GenericService;
use App\Traits\LancadorDeExcecao;
use App\Validates\Profile\ProfileValidate;
use stdClass;

class ProfileService extends GenericService
{
    use LancadorDeExcecao;

    /**
     *
     * @var ProfileRepository
     */
    protected $profileRepository;

    /**
     *
     * @var ProfileValidate
     */
    protected $profileValidate;

    public function __construct(ProfileRepository $profileRepository, ProfileValidate $profileValidate)
    {
        parent::__construct();
        $this->profileRepository = $profileRepository;
        $this->profileValidate = $profileValidate;

    }

    /**
     * Register new profile
     * @param stdClass $params
     * @return Profile
     */
    public function register($params)
    {
        $this->profileValidate->validateParameters($params);
        $profile = $this->profileRepository->register($params);
        return $profile;
    }


    /**
     * List profiles
     * @param \stdClass $params
     * @return array
     */
    public function list($params = null)
    {
        return $this->profileRepository->list($params);
    }

    /**
     * Edit profile
     * @param int $id
     * @param stdClass $params
     * @return Profile
     */
    public function edit($id, $params)
    {
        $this->userValidate->validateParameters($params);
        $profile = $this->retrieveById((int) $id);
        $profile = $this->profileRepository->edit($profile->id_profile, $params);
        $profile->refresh();
        return $profile;
    }

    /**
     * Delete profile
     * @param integer $id
     */
    public function delete($id)
    {
        $profile = $this->profileRepository->retrieve($id);
        $this->profileValidate->validateProfile($profile);
        $this->profileRepository->delete($profile->id_profile);
    }

    /**
     * Retrieve profile by id
     * @param int $id
     * @return Profile
     */
    public function retrieveById($id): Profile
    {
        $this->profileValidate->validateInteger($id);
        $profile = $this->profileRepository->retrieve($id);
        $this->profileValidate->validateProfile($profile);
        return $profile;
    }

}
