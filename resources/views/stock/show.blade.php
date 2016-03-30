@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tem certeza que deseja RETIRAR da despensa o produto abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>{{ $stock->product->name }}</td>
                                <td>Quantidade mínima {{ $stock->min }} {{ $stock->product->unit->name }}</td>
                                <td>Quantidade em estoque {{ $stock->current }} {{ $stock->product->unit->name }}</td>
                                <td>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('stock/' . $stock->stock_id . '/delete') }}">Retirar</a>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('stock') }}">Cancelar</a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
