<?php

namespace Tests\Feature\Services;

use App\Models\Category;
use App\Interfaces\Category\CategoryServiceInterface;
use Tests\TestCase;
use App\Exceptions\MovieException;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryServiceTest extends TestCase
{
    protected $categoryServiceInterface;

    protected $db;

    public function setUp() : void
    {
        parent::setUp();
        $this->db = $this->app->make('db');
        $this->db->connection()->beginTransaction();
        $this->categoryServiceInterface = $this->app->make(CategoryServiceInterface::class);
    }

    public function tearDown() : void
    {
        $this->db->connection()->rollback();
    }

    /**
     * A basic feature test example.
     * @group test-example
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testModel()
    {
        $category = factory(Category::class)->make();

        $this->assertInstanceOf(Category::class, $category);
    }

    public function testRetrieveByIdWithIdNotFound()
    {
        $newCategory = factory(Category::class)->make([
            'tx_name_category' => 'Abigail',
        ]);
        try {
            $this->categoryServiceInterface->retrieveById($newCategory->id_category);
        } catch (MovieException $e) {
            $errors = json_decode($e->retorno);
        }
        $this->assertEquals('Category not found', $errors->erro->category->found);
    }

    public function testRegister()
    {
        $params = new \stdClass();
        $params->tx_name_category = 'plplplp';

        $category = $this->categoryServiceInterface->register($params);
        $this->assertInstanceOf(Category::class, $category);
    }
}
