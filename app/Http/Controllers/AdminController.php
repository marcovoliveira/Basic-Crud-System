<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
     public function index()
    {
      $users = User::all();


      return view('admin.home', compact('users'));

    }


    public function create()
    {


      $roles = Role::All();
      return view('admin.create',['roles' => $roles],compact('roles'));
    }

    public function store(Request $request)
    {
      $regras = [
        'name' => 'required|min:5',
        'idade' => 'integer'
      ];

      $mensagens = [
        'name.required' => 'O nome é obrigatório!'
      ];


      $this->validate($request, $regras, $mensagens);

      $name = $request->name;
      //$idade = $request->idade;
      $email = $request->email;
      $role = $request->role;
      $password = $request->password;


      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password = bcrypt($password); 
      
      //$user->idade = $idade;
      $user->save();

      $user->role()->attach(Role::where('id', $role)->first());

      $users = User::all();
      
      return view('/admin/home', compact('users'));
    }

   

    public function view($id)
    {
      $admin = Admin::find($id);

      return view('detalhe',
        compact('admin'));
    }

    public function edit($id)
    {
      $users = User::find($id);

      return view('admin.edit',compact('users'));
    }

    public function update($id, Request $request)
    // Request -> type hint
    {
      $user = User::find($id);

      $regras = [
        'name' => 'required|min:5',
        //'idade' => 'integer'
      ];

      $mensagens = [
        'name.required' => 'O nome é obrigatório!'
      ];


     
     
      $this->validate($request, $regras, $mensagens);
      
      $name = $request->name;
      //$idade = $request->idade;
      $email = $request->email;


      $user->name = $name;
      $user->email = $email;
      //$user->idade = $idade;
      
      $user->save();

 

      $users = User::all();
     
      return view('/admin/home', compact('users'));
    }
}
