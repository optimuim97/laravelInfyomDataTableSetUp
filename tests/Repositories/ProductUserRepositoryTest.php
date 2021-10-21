<?php namespace Tests\Repositories;

use App\Models\ProductUser;
use App\Repositories\ProductUserRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ProductUserRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductUserRepository
     */
    protected $productUserRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->productUserRepo = \App::make(ProductUserRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_product_user()
    {
        $productUser = ProductUser::factory()->make()->toArray();

        $createdProductUser = $this->productUserRepo->create($productUser);

        $createdProductUser = $createdProductUser->toArray();
        $this->assertArrayHasKey('id', $createdProductUser);
        $this->assertNotNull($createdProductUser['id'], 'Created ProductUser must have id specified');
        $this->assertNotNull(ProductUser::find($createdProductUser['id']), 'ProductUser with given id must be in DB');
        $this->assertModelData($productUser, $createdProductUser);
    }

    /**
     * @test read
     */
    public function test_read_product_user()
    {
        $productUser = ProductUser::factory()->create();

        $dbProductUser = $this->productUserRepo->find($productUser->id);

        $dbProductUser = $dbProductUser->toArray();
        $this->assertModelData($productUser->toArray(), $dbProductUser);
    }

    /**
     * @test update
     */
    public function test_update_product_user()
    {
        $productUser = ProductUser::factory()->create();
        $fakeProductUser = ProductUser::factory()->make()->toArray();

        $updatedProductUser = $this->productUserRepo->update($fakeProductUser, $productUser->id);

        $this->assertModelData($fakeProductUser, $updatedProductUser->toArray());
        $dbProductUser = $this->productUserRepo->find($productUser->id);
        $this->assertModelData($fakeProductUser, $dbProductUser->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_product_user()
    {
        $productUser = ProductUser::factory()->create();

        $resp = $this->productUserRepo->delete($productUser->id);

        $this->assertTrue($resp);
        $this->assertNull(ProductUser::find($productUser->id), 'ProductUser should not exist in DB');
    }
}
