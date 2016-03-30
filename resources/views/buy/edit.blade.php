@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Compra</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('buy/' . $stock->stock_id . '/save') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $stock->product->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('buy') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Quantidade comprada</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="buy" value="{{ old('buy') }}">{{ $stock->product->unit->name }}

                                @if ($errors->has('buy'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('buy') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Comprar</button>
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
