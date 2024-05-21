<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostSeeder extends Seeder
{
  
    public function run()
    {
        $post= new Post();
        $post->title="Meu primeiro post";
        $post->content="Conteudo do meu post";
        $post->save();
        Post::create(['title'=>'Segundo post',
       'content'=>'conteudo para o segundo post',
     ]);
 
// Retrieve the currently authenticated user...
$user = Auth::user();
 if($user){
    $id = Auth::id();
echo $id;
 }else{
    
    echo "nenhum usuario encontrado";
 }

    }
}
