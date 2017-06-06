@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Area de Administração - Gestão Utilizadores</div>
                <div class="panel-body">
                  <div class="col-md-15 text-right">    
                                <a href="/admin/user/create" button type="button" class="btn btn-primary btn-sm" >Novo Utilizador</button></a>
                        </div>  
                    <div style="overflow-x:auto;">
                            <table class="table table-striped table-responsive" id="myTable" >
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Utilizador</th>
                                        <th>Data Registo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($users as $user)
                                        <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->created_at}}
                                          <td>
                                        <a href="/admin/user/edit/{{$user->id}}" button type="button" class="btn btn-primary btn-sm" >Edit</button>
                                        </td>

                                    @endforeach
                                   
                                    </tbody>
                                     
                            </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
