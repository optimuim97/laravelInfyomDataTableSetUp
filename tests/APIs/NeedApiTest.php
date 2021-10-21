<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Need;

class NeedApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_need()
    {
        $need = Need::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/needs', $need
        );

        $this->assertApiResponse($need);
    }

    /**
     * @test
     */
    public function test_read_need()
    {
        $need = Need::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/needs/'.$need->id
        );

        $this->assertApiResponse($need->toArray());
    }

    /**
     * @test
     */
    public function test_update_need()
    {
        $need = Need::factory()->create();
        $editedNeed = Need::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/needs/'.$need->id,
            $editedNeed
        );

        $this->assertApiResponse($editedNeed);
    }

    /**
     * @test
     */
    public function test_delete_need()
    {
        $need = Need::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/needs/'.$need->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/needs/'.$need->id
        );

        $this->response->assertStatus(404);
    }
}
