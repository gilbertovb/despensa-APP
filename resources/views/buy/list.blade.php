@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Lista de compras</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
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
                                    <a title="Comprar" class="btn btn-small btn-info" href="{{ URL::to('buy/' . $value->stock_id . '/edit') }}"><i class="fa fa-shopping-cart"></i></a>
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
