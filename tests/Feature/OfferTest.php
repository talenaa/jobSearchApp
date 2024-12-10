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

    public function test_storeMethodSavesObjectCorrectly()
    {
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);

        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $this->assertDatabaseCount('offers', 1);
    }

    public function test_checkIfShowViewWorksCorrectly()
    {
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);

        $response = $this->get('/show/2');

        $response->assertStatus(200)
            ->assertViewIs('show');
    }

    public function test_checkIfEditFormViewWorksCorrectly()
    {
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);

        $response = $this->get('/edit/1');

        $response->assertStatus(200)
            ->assertViewIs('edit');
    }

    public function test_checkIfUpdateMethodWorksCorrectly()
    {
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);

        $response = $this->post(route('update', 1), [
            'title' => 'New Offer',
            'enterprise' => 'Hello',
            'description' => 'Hello',
            'workspace' => 'Hello',
            'status' => true
        ], );

        $offer = Offer::find(1);
        $this->assertEquals('Hello', $offer->enterprise);

    }

    public function test_checkIfDeleteMethodDestroyElement()
    {
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);

        $response = $this->delete(route('destroy',1));
        $this->assertDatabaseCount('offers', 0);
    }

    public function test_checkIfRedirectViaActionToDeleteWorks(){
        $response = $this->post(route('store'), [
            'title' => 'New Offer',
            'enterprise' => 'Hello enterprise',
            'description' => 'Hello description',
            'workspace' => 'Hello workspace',
            'status' => true
        ]);
        $this->get('/?action=delete&id=1');
        $this->assertDatabaseCount('offers', 0);
    }
}