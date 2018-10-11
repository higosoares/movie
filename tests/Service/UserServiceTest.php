<?php

namespace Tests\Feature;

use App\Exceptions\MovieException;
use App\Models\User;
use App\Services\User\UserService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/*
 * @group user
 *
 */
class UserServiceTest extends TestCase
{
    /*
     * @var UserService
     */
    protected $userService;

    protected $db;

    public function setUp()
    {
        parent::setUp();
        $this->db = $this->app->make('db');
        $this->db->connection()->beginTransaction();
        $this->userService = $this->app->make(UserService::class);
    }

    public function tearDown()
    {
        $this->db->connection()->rollback();
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testRegisterUser()
    {

    }

    /**
     * @group user-by-id
     */
    public function testGetUserById()
    {
        $params = new \stdClass();
        $params->id_user = 1;
        $params->tx_name_user = 'Nome';
        $params->tx_email_user = 'email@email.com';
        $params->tx_password_user = '123456';
        $params->tp_situation_user = 1;

        $user = $this->userService->register($params);
        $user = $this->userService->retrieveById($user->id_user);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testEditUser()
    {

    }

    public function testEditUserWithIdInvalid()
    {
        try {
            $this->userService->retrieveById('ffoi');
        } catch (MovieException $e) {
            $errors = json_decode($e->retorno);
        }
        $this->assertEquals('Usuario inválido', $errors->errors->id_user->invalid);
    }

    public function testEditUserWithIdNotFound()
    {
        try {
            $this->userService->retrieveById(3232);
        } catch (MovieException $e) {
            $errors = json_decode($e->retorno);
        }
        $this->assertEquals('Usuario não encontrado', $errors->errors->id_user->found);
    }
}
