@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exame</div>
                <div class="panel-body">

                  <!--Nome-->
                       
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Descriçao:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"value="{{$exame->desc}}" disabled >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Paciente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                           <!--Desc-->
                     
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">asdasdas:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control"value="{{$exame->desc}}" disabled >
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
                                <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-warning " >
                                Back 
                                    </button>
                                    <a/>
                                     </form>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection