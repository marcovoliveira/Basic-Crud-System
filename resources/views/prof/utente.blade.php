@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dados Pessoais de {{$utentes->name}} </div>
                <div class="panel-body">

                  <!--Nome-->
                       <form class="form-horizontal">  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"value="{{$utentes->name}}" disabled >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Paciente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                           <!--Desc-->
                       <form class="form-horizontal">  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Idade:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"value="{{$utentes->age}}" disabled >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Paciente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        {{-- Submit --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/prof/home">
                                <button type="button" class="btn btn-warning " >
                                Back
                                </button>
                                </a>    
                                </form>
                            </div>
                        </div>
                        <hr>
                         <label for="table" class="col-md-4 control-label">Exames de {{$utentes->name}}</label>
                        <div class="col-md-15 text-right">    
                                <a href="/prof/exame/create/{{$utentes->id}}" button type="button" class="btn btn-primary btn-sm" >Novo Exame</button></a>
                        </div>  
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
                                        <a href="/prof/exame/view/{{$exame->id}}" button type="button" class="btn btn-success btn-sm" >View</button>
                                        </td>
                                          <td>
                                        <a href="/prof/exame/edit/{{$exame->id}}" button type="button" class="btn btn-primary btn-sm" >Edit</button>
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