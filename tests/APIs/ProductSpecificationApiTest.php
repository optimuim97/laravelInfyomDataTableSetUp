<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ProductSpecification;

class ProductSpecificationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/product_specifications', $productSpecification
        );

        $this->assertApiResponse($productSpecification);
    }

    /**
     * @test
     */
    public function test_read_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/product_specifications/'.$productSpecification->id
        );

        $this->assertApiResponse($productSpecification->toArray());
    }

    /**
     * @test
     */
    public function test_update_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();
        $editedProductSpecification = ProductSpecification::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/product_specifications/'.$productSpecification->id,
            $editedProductSpecification
        );

        $this->assertApiResponse($editedProductSpecification);
    }

    /**
     * @test
     */
    public function test_delete_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/product_specifications/'.$productSpecification->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/product_specifications/'.$productSpecification->id
        );

        $this->response->assertStatus(404);
    }
}
