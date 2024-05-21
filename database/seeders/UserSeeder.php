<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserir um novo usuário
       

        User::create([
            'name'=>'bernard',
            'email'=>'bernard@gmail.com',
            'password'=>'123'
        ]);
    }
}
