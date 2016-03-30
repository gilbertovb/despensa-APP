@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos disponiveis para consumo</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Produto</td>
                                <td>Quantidade atual</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($stock as $key => $value)
                            <tr>
                                <td>{{ $value->product->name }}</td>
                                <td>{{ $value->current }} {{$value->product->unit->name }}</td>

                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('consume/' . $value->stock_id . '/edit') }}">Consumir</a>
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
