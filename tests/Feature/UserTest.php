<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; // Isso garante que seu banco de dados seja redefinido após cada teste

    public function test_store_method_creates_user()
    {
        $data = [
            'name' => 'Test Useraft',
            'email' => 'test@examfplea.com',
            'password'=>'123'
            // outros dados necessários para criar um usuário
        ];
    
        $response = $this->post('/users', $data);
    
        $response->assertStatus(201); // Verifica se o status da resposta é 201 (Created)
    echo "oui ";
    }
    
}
