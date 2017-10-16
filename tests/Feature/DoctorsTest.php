<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DoctorsTest extends TestCase
{
    public function testResponseJson()
    {
    	$response = $this->json('GET', '/api/doctors');

    	$response->assertStatus(200)
    	        ->assertJson([
    	         	'data' => true
    	        ]);
    }

    public function testNotFoundResponseJson()
    {
    	$response = $this->json('GET', '/api/doctors/22');

    	$response->assertStatus(404)
    			->assertJson([
    				'message' => true
    			]);
    }
}
