@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar exame</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/prof/exame/store/{{$user->id}}">
                        {{ csrf_field() }}
                        <!--Nome-->
                       
                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label for="desc" class="col-md-4 control-label">desc</label>

                            <div class="col-md-6">
                                <input id="desc" type="text" class="form-control" name="desc" value="{{ old('desc') }}" required autofocus>

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registar Exame
                                </button>
                                </button>
                                <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-warning " >
                                Back 
                                    </button>
                                    <a/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection