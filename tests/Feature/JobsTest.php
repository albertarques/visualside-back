<?php

namespace Tests\Feature;

use App\Models\Jobs;
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
     * 
     */
    
     /**@test */
    public function jobslist_page_is_accessible()
    {
        $this->get('/visualside')
            ->assertOk();
    }
    /**
     * @test
     * 
     */

    public function job_can_created()
    {

    }


}
