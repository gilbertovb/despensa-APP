@extends('layouts.app')

@section('content')
<script src="{{ url('/js/app.js') }}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Consumo</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('consume/' . $stock->stock_id . '/save') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 col-xs-4 control-label">Nome</label>

                            <div class="col-md-6 col-xs-6">
                                <input type="text" class="form-control" name="name" value="{{ $stock->product->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('consume') ? ' has-error' : '' }}">
                            <label class="col-md-4 col-xs-4 control-label">Quantidade consumida</label>

                            <div class="col-md-4 col-xs-4">
                                <input id="number" type="number" class="form-control" name="consume" value="{{ old('consume',1) }}">
                                @if ($errors->has('consume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('consume') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <p class="form-control-static">{{ $stock->product->unit->name }}</p>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <a onclick="addValue()" href="#" class="btn btn-danger"><i class="fa fa-plus"></i></a>
                                <a onclick="delValue()" href="#" class="btn btn-warning"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Consumir</button>
                                <a href="{{ url('/consume') }}" class="btn btn-info">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
