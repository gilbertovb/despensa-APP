@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Despensa</div>
                <div class="panel-body">
                    <table class="table table-striped table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center">Produtos</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($stock as $value)
                            <tr>
                                <td class="text-left"><strong>{{ $value->product->name }}</strong><br>
                                    <div style="margin-left: 15px;">{{ $value->current }} {{$value->product->unit->name }}<br>
                                        ({{ $value->min }} {{$value->product->unit->name }})</div>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a class="btn btn-info" title="Editar quantidade mínima." href="{{ URL::to('stock/' . $value->stock_id . '/edit') }}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger" title="Retirar o produto da Despensa." href="{{ URL::to('stock/' . $value->stock_id) }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-small btn-success" href="{{ url('/stock/create') }}">Adicionar Produtos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
