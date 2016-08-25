@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Editar Produto</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('products/' . $product->product_id . '/save') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-xs-4 col-md-4 control-label">Nome</label>

                            <div class="col-xs-6 col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('unit_id') ? ' has-error' : '' }}">
                            <label class="col-xs-4 col-md-4 control-label">Unidade</label>

                            <div class="col-xs-6 col-md-6">
                                <select class="form-control" name="unit_id">
                                @foreach($units as $key => $value)
                                    @if($value->unit_id == $product->unit_id)
                                        <option value="{{ $value->unit_id }}" selected>{{ $value->name }}</option>
                                    @else
                                        <option value="{{ $value->unit_id }}">{{ $value->name }}</option>
                                    @endif
                                @endforeach
                                </select>

                                @if ($errors->has('unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{ url('/products') }}" class="btn btn-info">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
