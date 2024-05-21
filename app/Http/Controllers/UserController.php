<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$users=User::all();
return response()->json($users,200);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $validateData=$request->validate([
        'name' => 'required', // Erro aqui, deve ser 'required'
        'email' => 'required|email|unique:users',
        'password'=>'required'
       ]);
       $user=User::create($validateData);
     return response()->json($user,201);
    }

  
    public function show($id)
    {
      
        $user=User::findOrFail($id);
        return response()->json($user,200);
    }

 
    public function edit($id)
    {
     
    }

    
    public function update(Request $request, $id)
    {

        $user=User::findOrFail($id);
        $validateData=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users,email,'.$id
        ]);
    
    $user->update($validateData);
    return response()->json($user,200);
    }

    
    public function destroy($id)
    {
    $user=User::findOrFail($id);
    $user->delete();
    return response()->json(['message'=>'Usuario deleatado com sucesso'],200);
    }
}
