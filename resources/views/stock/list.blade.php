@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Despensa</div>
                <a class="btn btn-small btn-success" href="{{ url('/stock/create') }}">Adicionar Produtos</a>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Produto</td>
                                <td>Quantidade atual</td>
                                <td>Quantidade minima</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($stock as $key => $value)
                            <tr>
                                <td>{{ $value->product->name }}</td>
                                <td>{{ $value->current }} {{$value->product->unit->name }}</td>
                                <td>{{ $value->min }} {{$value->product->unit->name }}</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('stock/' . $value->stock_id . '/edit') }}">Editar quantidade minima</a>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('stock/' . $value->stock_id) }}">Retirar produto da despensa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
