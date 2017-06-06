@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exames</div>

                <div class="panel-body">
                   <div style="overflow-x:auto;">
                            <table class="table table-striped table-responsive" id="myTable" >
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Desc</th>
                                        <th>Utente</th>
                                        <th>Data Marcação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($exames as $exame)
                                        <tr>
                                        <th scope="row">{{$exame->id}}</th>
                                        <td>{{$exame->desc}}</td>
                                        <td>{{$exame->users->name}}
                                        <td>{{$exame->created_at}}</td>
                                          <td>
                                        <a href="/utente/exame/{{$exame->id}}" button type="button" class="btn btn-success btn-sm" >View</button>
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
