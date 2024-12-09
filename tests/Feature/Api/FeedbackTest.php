<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use App\Models\Feedback;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_CheckIfCanReceiveComments()
    {
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news');

        $response->assertStatus(200)->assertJsonCount(1);
    }
}
