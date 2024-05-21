<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;
use RdKafka\Producer;
use RdKafka\Consumer;
use RdKafka\Conf;

class ExemploController extends Controller
{

    public function index(){
        return "ola mundo!";
    }
    
//Injeção de dependencias 

protected $user;
public function __construct(User $user){
    $this->user=$user;

}

public function test(){
    return "ola mundo";
}

public function show(Request $request){

    $id = $request->query('id');
    
$user=$this->user->findOrFail($id);
return "O ID recebido é : $user->name";
}

}
