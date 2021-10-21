<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ProductUser;

class ProductUserApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_product_user()
    {
        $productUser = ProductUser::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/product_users', $productUser
        );

        $this->assertApiResponse($productUser);
    }

    /**
     * @test
     */
    public function test_read_product_user()
    {
        $productUser = ProductUser::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/product_users/'.$productUser->id
        );

        $this->assertApiResponse($productUser->toArray());
    }

    /**
     * @test
     */
    public function test_update_product_user()
    {
        $productUser = ProductUser::factory()->create();
        $editedProductUser = ProductUser::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/product_users/'.$productUser->id,
            $editedProductUser
        );

        $this->assertApiResponse($editedProductUser);
    }

    /**
     * @test
     */
    public function test_delete_product_user()
    {
        $productUser = ProductUser::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/product_users/'.$productUser->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/product_users/'.$productUser->id
        );

        $this->response->assertStatus(404);
    }
}
