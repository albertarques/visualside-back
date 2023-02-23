<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdvertiserTest extends TestCase
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
    public function a_api_advertiser_index_request(): void
    {
        $response = $this->get('api/advertisers');
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
    public function a_api_advertiser_can_be_store() :void
    {
        $response = $this->postJson('/api/advertisers', [
            'name' => 'Tes Name',
            'description' => 'Test Description',
            'web' => 'Test Web',
            'location' => 'Test Location',
            'contact' => 'Test Contact'
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
    public function a_api_advertiser_can_be_updated(): void
    {
        $response = $this->put('/api/advertisers/1', [
            'name' => 'Tes Name',
            'description' => 'Test Description',
            'web' => 'Test Web',
            'location' => 'Test Location',
            'contact' => 'Test Contact'
        ]);
        $response
            ->assertStatus(200);
    }
    /**
     * @test
     * 
     */
    public function a_advertiser_can_be_deleted(): void
    {
        $response = $this->delete('/api/advertisers/1', []);

        $response
            ->assertStatus(500);;
    }
}
