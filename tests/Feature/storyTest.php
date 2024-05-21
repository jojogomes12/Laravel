<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Story;
class storyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_story()
    {
        $data = [
            'title' => 'Test User',
            'content' => 'test@example.com',
            'user_id'=>1
            // outros dados necessários para criar um usuário
        ];
    
        $response = $this->post('/story/create', $data);
    
        $response->assertStatus(200); // Verifica se o status da resposta é 201 (Created)
    echo "oui ";
    }
    
}
