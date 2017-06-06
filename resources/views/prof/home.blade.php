@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profissional de Saúde - Utentes do Sistema</div>

                <div class="panel-body">
                   <div style="overflow-x:auto;">
                            <table class="table table-striped table-responsive" id="myTable" >
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Utente</th>
                                        <th>Data Registo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($utentes as $utente)
                                        <tr>
                                        <th scope="row">{{$utente->id}}</th>
                                        <td>{{$utente->name}}</td>
                                        <td>{{$utente->created_at}}
                                          <td>
                                        <a href="/prof/utente/{{$utente->id}}" button type="button" class="btn btn-success btn-sm" >View</button>
                                        </td>

                                    @endforeach
                                   
                                    </tbody>
                                     
                            </table>
                            </div>
                </div>
            </div>
          </button></a>
        </div>
    </div>
</div>
@endsection
