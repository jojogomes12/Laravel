<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Story;
class StoryController extends Controller
{
    public function index(){

        $nome = "jão";
        $idade = 24;
        $list = ['id' => $idade, 'nome' => $nome, 'email' => 'joaoecarol39@gmail.com'];
        $list2=range(1,20,4);
        return view('test',['list' => $list,
                    'list2'=>$list2
                     ]
    );
}

public function create(Request $request){

    $request->validate([
       'title'=>'required|string|max:255',
       'content'=>'required|string',
       'user_id'=>'required|integer',
    ]);
    try{
   Story::create([
    'title'=>$request->title,
    'content'=>$request->content,
    'user_id'=>$request->user_id,
   ]);

   return response()->json(['message'=>'Historia criada com sucesso']);

    }catch(Exception $e){
        return response()->json(['error'=>'Erro ao criar historia :'.$e]);

    }
}
}