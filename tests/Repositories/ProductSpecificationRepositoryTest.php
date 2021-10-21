<?php namespace Tests\Repositories;

use App\Models\ProductSpecification;
use App\Repositories\ProductSpecificationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ProductSpecificationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductSpecificationRepository
     */
    protected $productSpecificationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->productSpecificationRepo = \App::make(ProductSpecificationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->make()->toArray();

        $createdProductSpecification = $this->productSpecificationRepo->create($productSpecification);

        $createdProductSpecification = $createdProductSpecification->toArray();
        $this->assertArrayHasKey('id', $createdProductSpecification);
        $this->assertNotNull($createdProductSpecification['id'], 'Created ProductSpecification must have id specified');
        $this->assertNotNull(ProductSpecification::find($createdProductSpecification['id']), 'ProductSpecification with given id must be in DB');
        $this->assertModelData($productSpecification, $createdProductSpecification);
    }

    /**
     * @test read
     */
    public function test_read_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();

        $dbProductSpecification = $this->productSpecificationRepo->find($productSpecification->id);

        $dbProductSpecification = $dbProductSpecification->toArray();
        $this->assertModelData($productSpecification->toArray(), $dbProductSpecification);
    }

    /**
     * @test update
     */
    public function test_update_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();
        $fakeProductSpecification = ProductSpecification::factory()->make()->toArray();

        $updatedProductSpecification = $this->productSpecificationRepo->update($fakeProductSpecification, $productSpecification->id);

        $this->assertModelData($fakeProductSpecification, $updatedProductSpecification->toArray());
        $dbProductSpecification = $this->productSpecificationRepo->find($productSpecification->id);
        $this->assertModelData($fakeProductSpecification, $dbProductSpecification->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_product_specification()
    {
        $productSpecification = ProductSpecification::factory()->create();

        $resp = $this->productSpecificationRepo->delete($productSpecification->id);

        $this->assertTrue($resp);
        $this->assertNull(ProductSpecification::find($productSpecification->id), 'ProductSpecification should not exist in DB');
    }
}
