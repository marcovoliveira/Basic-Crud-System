<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exames;
use Auth;

class ExameController extends Controller
{
  
  public function __construct()
    {
        $this->middleware('auth');
        
    }

     public function index()
    {

        $exames = Exames::orderByDesc('created_at')->where('users_id', '=', Auth::id())
            ->paginate(10);
            
           return view ('utente.exames', compact('exames'));

    }

    public function show($id)
    {

      $exame=Exames::findOrFail($id);
     
      if($exame->users_id == Auth::id()){

         return view ('utente.exame', compact('exame'));
      }
      else {

      return view ('utente.home');
      }


    }

    public function create($id)
    {

     $utente=Utente::find($id);

    return view('novo_exame', compact('utente'));

    }

    public function store(Request $request)
    {
      $regras = [

      ];

      $mensagens = [

      ];

      $this->validate($request, $regras, $mensagens);

      $rbc=$request->rbc;
      $hgb=$request->hgb;
      $htc=$request->htc;
      $mvc=$request->mvc;
      $mchc=$request->rbc;
      $rdw=$request->rdw;
      $wbc=$request->wbc;
      $neu=$request->neu;
      $lwm=$request->lwm;
      $mono=$request->mono;
      $eos=$request->eos;
      $baso=$request->baso;
      $plt=$request->plt;
      $mpv=$request->mpv;
      $pdw=$request->pdw;



      $exame = new Exame;
      $exame->rbc=$rbc;
      $exame->hgb=$hgb;
      $exame->htc=$htc;
      $exame->mvc=$mvc;
      $exame->mchc=$mchc;
      $exame->rdw=$rdw;
      $exame->wbc=$whilebc;
      $exame->neu=$neu;
      $exame->lwm=$lwm;
      $exame->mono=$mono;
      $exame->eos=$eos;
      $exame->baso=$baso;
      $exame->plt=$plt;
      $exame->mpv=$mpv;
      $exame->pdw=$pdw;

  }

   

    public function view($id)
    {
      $exame = Exame::find($id);
      return $exame;

        }

    public function edit($id)
    {
      $exame = Exame::find($id);

      return view('editar_exame',
        compact('exame'));
    }

    public function update($id, Request $request)
    // Request -> type hint
    {
      $exame = Exame::find($id);

      $regras = [
        'nome' => 'required|min:5',
        'idade' => 'integer'
      ];

      $mensagens = [
        'nome.required' => 'O nome é obrigatório!'
      ];

      $this->validate($request, $regras, $mensagens);

      $nome = $request->nome;
      $idade = $request->idade;

      $utente->nome = $nome;
      $utente->idade = $idade;
      $utente->save();

      return view('resposta', compact('nome', 'idade'));
    }
}
