<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Exames;


class ProfissionalController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('prof');
    }

      public function index()
    {

       $utentes = Role::where('name', 'utente')->first()->users()->get();
       
       return view('prof.home', compact('utentes'));
       
    }

    public function show($id)
    {

      $utentes = User::findOrFail($id);
      $exames = Exames::orderByDesc('created_at')->where('users_id', '=', $utentes->id)
            ->paginate(10);

      
      return view('prof.utente', compact('utentes', 'exames'));

    }

    public function showExame($id) 
    {

      $exame = Exames::findOrFail($id);

      return view('prof.show', compact('exame'));

    }

    public function create($id)
    {
      $user=User::find($id);
      

      return view('prof.create', compact('user'));
    }

      public function store($id, Request $request)
    {
      
      $regras = [

      ];

      $mensagens = [

      ];

      $this->validate($request, $regras, $mensagens); 
      $desc=$request->desc;

      $exame = new Exames; 
      $exame->desc=$desc;
      $exame->users_id=$id;
      $exame->save();
     

      return redirect()->action('ProfissionalController@show', $id);
    }

     public function edit($id)
    {
      $exame = Exames::findOrFail($id);


      return view('prof.edit', compact('exame'));
    }
    
     public function update($id, Request $request)
    {

      $exame = Exames::findOrFail($id);

      $exame->update($request->all());


      return redirect()->action('ProfissionalController@show', $exame->users_id);
    }

      


}
