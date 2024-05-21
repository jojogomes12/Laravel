<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Manga;
class MangaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $manga=Manga::factory()->create();
        $this->assertDatabaseHas('manga',[
            'id'=>$manga->id
        ]);
    }

    public function it_create_a_product(){
        $manga=Manga::factory()->create();
        $this->assertDatabaseHas('manga',[
            'id'=>$manga->id
        ]);

    }
}
