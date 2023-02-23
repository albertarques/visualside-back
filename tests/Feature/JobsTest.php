<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
     * @test
     * 
     */
    public function a_api_jobs_index_request():void
    {
        $response = $this->get('api/jobs');
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => true,
            ]);
    }
    /**
     * @test
     * 
     */
    public function a_api_job_can_be_store(): void
    {
        $response = $this->postJson('/api/jobs', [
            "title" => "title",
            "picture" => "picture",
            "description" => "fullstack",
            "location" => "location",
            "salary" => "salary",
        ]);
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }

    /**
     * @test
     * 
     */
    public function a_job_can_be_updated(): void
    {
        $response = $this->put('/api/jobs/1', [
            "title" => "title",
            "picture" => "picture",
            "description" => "fullstack",
            "location" => "location",
            "salary" => "salary",
        ]);

        $response
            ->assertStatus(200);
    }

    /**
     * @test
     * 
     */
    public function a_job_can_be_deleted(): void
    {
        $response = $this->delete('/api/jobs/1', []);

        $response
            ->assertStatus(500);;
    }
}
