<?php namespace Tests\Repositories;

use App\Models\Need;
use App\Repositories\NeedRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class NeedRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var NeedRepository
     */
    protected $needRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->needRepo = \App::make(NeedRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_need()
    {
        $need = Need::factory()->make()->toArray();

        $createdNeed = $this->needRepo->create($need);

        $createdNeed = $createdNeed->toArray();
        $this->assertArrayHasKey('id', $createdNeed);
        $this->assertNotNull($createdNeed['id'], 'Created Need must have id specified');
        $this->assertNotNull(Need::find($createdNeed['id']), 'Need with given id must be in DB');
        $this->assertModelData($need, $createdNeed);
    }

    /**
     * @test read
     */
    public function test_read_need()
    {
        $need = Need::factory()->create();

        $dbNeed = $this->needRepo->find($need->id);

        $dbNeed = $dbNeed->toArray();
        $this->assertModelData($need->toArray(), $dbNeed);
    }

    /**
     * @test update
     */
    public function test_update_need()
    {
        $need = Need::factory()->create();
        $fakeNeed = Need::factory()->make()->toArray();

        $updatedNeed = $this->needRepo->update($fakeNeed, $need->id);

        $this->assertModelData($fakeNeed, $updatedNeed->toArray());
        $dbNeed = $this->needRepo->find($need->id);
        $this->assertModelData($fakeNeed, $dbNeed->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_need()
    {
        $need = Need::factory()->create();

        $resp = $this->needRepo->delete($need->id);

        $this->assertTrue($resp);
        $this->assertNull(Need::find($need->id), 'Need should not exist in DB');
    }
}
