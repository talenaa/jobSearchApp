<?php

namespace Tests\Feature;

use App\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfIndexIsWorking()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('home'));
        $response->assertStatus(200)
                ->assertViewIs('index');
    }

    public function test_CheckIfshowIsWorking()
    {
        Offer::factory(1)->create();
        
        $response = $this->get('/offers/1');

        $response->assertStatus(200);
        
    }
}