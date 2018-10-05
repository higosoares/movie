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
use Illuminate\Container\Container;

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
     * @var UserService
     */
    protected $userService;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->userRepository = $container->make(UserRepository::class);
        $this->userService = $container->make(UserService::class);

    }

    /**
     * Register new user
     * @param array $params
     * @return User
     */
    public function register($params)
    {
        //$this->programaValidate->validarParametros($params);
        //$this->programaValidate->validarDataCadastro($params);

        /*$user = new User([
            'tx_name_user' => $params->tx_name_user,
            'tx_email_user' => $params->tx_email_user,
            'tx_password_user' => $params->tx_password_user,
            'tp_situation_user' => 1
        ]);
        */
        $user = $this->userRepository->register($params);
        return $user;
    }


    /**
     * List users
     * @param \stdClass $params
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function list($params = null)
    {
        return $this->userRepository->list($params);
    }

    /**
     * Edit user
     * @param int $id
     * @param array $params
     * @return User
     */
    public function edit($id, $params)
    {
        //$this->programaValidate->validarParametros($params);
        $user = $this->retrieveById((int) $id);
        //$this->programaValidate->validarDataEdicao($params, $programa);

        /*$user->fill([
            'tx_name_user' => $params->tx_name_user,
            'tx_email_user' => $params->tx_email_user,
            'tx_password_user' => bcrypt($params->tx_password_user),
        ]);*/

        $user = $this->userRepository->edit($user->id_user, $params);
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
        $this->userRepository->delete($user->id_user);
    }

    /**
     * Retrieve user by id
     * @param int $id
     * @return User
     */
    public function retrieveById($id): User
    {
        //$this->programaValidate->validarInteiro($id);
        $user = $this->userRepository->retrieve($id);
        //$this->programaValidate->validarPrograma($programa);
        return $user;
    }

}