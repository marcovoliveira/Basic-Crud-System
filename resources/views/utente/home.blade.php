@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notificação</div>

                <div class="panel-body">
                    Utente logado  com sucesso!
                </div>
            </div>
          </button></a>
                      <a href="{{ url('/utente/exames') }}" button type="button" class="btn btn-primary">
                    Consultar Exames 

                      </button></a>
                       <a href="{{ url('/utente/dados') }}" button type="button" class="btn btn-primary">
                    Consultar Dados Pessoais 

                      </button></a>

        </div>
    </div>
</div>
@endsection
