<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\User;

use App\Models\User;
use App\Repositories\User\UserRepository;
use App\Services\GenericService;
use App\Traits\LancadorDeExcecao;
use App\Validates\User\UserValidate;
use Illuminate\Container\Container;
use stdClass;

class UserService extends GenericService
{
    use LancadorDeExcecao;

    /**
     *
     * @var UserRepository
     */
    protected $userRepository;

    /**
     *
     * @var UserValidate
     */
    protected $userValidate;

    public function __construct(UserRepository $userRepository, UserValidate $userValidate)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
        $this->userValidate = $userValidate;

    }

    /**
     * Register new user
     * @param stdClass $params
     * @return User
     */
    public function register($params)
    {
        $this->userValidate->validateParameters($params);
        $user = $this->userRepository->register($params);
        return $user;
    }


    /**
     * List users
     * @param \stdClass $params
     * @return array
     */
    public function list($params = null)
    {
        return $this->userRepository->list($params);
    }

    /**
     * Edit user
     * @param int $id
     * @param stdClass $params
     * @return User
     */
    public function edit($id, $params)
    {
        $this->userValidate->validateParameters($params);
        $user = $this->retrieveById((int) $id);
        $user = $this->userRepository->edit($user->id, $params);
        $user->refresh();
        return $user;
    }

    /**
     * Delete user
     * @param integer $id
     */
    public function delete($id)
    {
        $user = $this->userRepository->retrieve($id);
        $this->userValidate->validateUser($user);
        $this->userRepository->delete($user->id);
    }

    /**
     * Retrieve user by id
     * @param int $id
     * @return User
     */
    public function retrieveById($id): User
    {
        $this->userValidate->validateInteger($id);
        $user = $this->userRepository->retrieve($id);
        $this->userValidate->validateUser($user);
        return $user;
    }

}
