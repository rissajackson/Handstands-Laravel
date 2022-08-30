<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Handstand;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewListHandstandsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $handstands = Handstand::factory()->count(2)->create();

        $response = $this->get('/handstands');

        $response->assertStatus(200);
        $response->assertSee($handstands->first()->title);
        $response->assertSee($handstands->last()->title);
        // $response->assertSee('This is a breakdancing handstand');
    }
}
