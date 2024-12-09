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
}