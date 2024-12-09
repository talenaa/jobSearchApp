<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanReceiveAllOffersInJsonFile() {
        $offer = Offer::factory(5)->create();
        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
            ->assertJsonCount(5);
    }

    public function test_CheckIfCanGetAnOfferById()
    {
        Offer::factory(10)->create();
        
        $response = $this->get('/api/offers/1');

        $response->assertStatus(200)->assertJsonFragment([
            'id' => 1
        ]);
    }

    public function test_CheckIfCanDeleteAnOffer()
    {
        Offer::factory(10)->create();
        
        $response = $this->delete('/api/offers/1');
        $this->assertDatabaseCount('offers', 9);
    }

    public function test_CheckIfCanCreateAnOffer()
    { 
        
        $response = $this->post('/api/offers', [

            'title' => 'test',
            'enterprise' => 'eifjoa',
            'description' => 'jfheihija',
            'workspace' => 'aaaaa',
            'status' => 0,
        ]);

        $response = $this->get('/api/offers');

        $response->assertStatus(200)->assertJsonFragment([

            'title' => 'test',
            'enterprise' => 'eifjoa',
            'description' => 'jfheihija',
            'workspace' => 'aaaaa',
            'status' => 0,
        ]);
    }


}