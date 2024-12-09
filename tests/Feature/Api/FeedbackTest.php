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

    public function test_CheckIfCanGetCommentsById()
    {
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment(['offer_id' => 1]);
    }

    public function test_CheckIfCanDeleteAComment()
    {
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->delete('/api/offers/1/news/1');
        $this->assertDatabaseCount('feedback', 0);
    }

    public function test_CheckIfCanCreateAComment()
    {
        Offer::factory(1)->create();

        $response = $this->post('/api/offers/1/news', [

            'offer_id' => 1,
            'news' => 'asldasdas',
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'offer_id' => 1,
            'news' => 'asldasdas',
        ]);
    }

    public function test_CheckIfCanUpdateAComment()
    {
        Offer::factory(10)->create();
        Feedback::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->put('/api/offers/1/news/1', 
        [
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
    }
}

