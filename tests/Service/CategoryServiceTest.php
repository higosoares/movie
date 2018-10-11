<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @group category
 */
class CategoryServiceTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->db = $this->app->make('db');
        $this->db->connection()->beginTransaction();
    }

    public function tearDown()
    {
        $this->db->connection()->rollback();
    }

    /**
     * @group category-cadastro
     */
    public function testCadastro()
    {
        $category = \App\Models\Category::all();
    }

    /**
     * @group category-listar
     */
    public function testListagemCategorias()
    {
        $category = \App\Models\Category::all();
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
}
