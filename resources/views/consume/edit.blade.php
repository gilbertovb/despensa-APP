@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Compra</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('consume/' . $stock->stock_id . '/save') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $stock->product->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('consume') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Quantidade consumida</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="consume" value="{{ old('consume') }}">{{ $stock->product->unit->name }}

                                @if ($errors->has('consume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('consume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Consumir</button>
                                <a href="{{ url('/buy') }}" class="btn btn-info">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
