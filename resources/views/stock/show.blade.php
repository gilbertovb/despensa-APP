@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Tem certeza que deseja RETIRAR da despensa o produto abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-responsive table-condensed">
                        <thead>
                            <tr>
                                <td class="text-left"><strong>{{ $stock->product->name }}</strong><br>
                                    <div style="margin-left: 15px;">{{ $stock->current }} {{$stock->product->unit->name }}<br>
                                        ({{ $stock->min }} {{$stock->product->unit->name }})</div>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a class="btn btn-small btn-danger" title="Confirmar" href="{{ URL::to('stock/' . $stock->stock_id . '/delete') }}"><i class="fa fa-check"></i></a>
                                    <a class="btn btn-small btn-info" title="Cancelar" href="{{ URL::to('stock') }}"><i class="fa fa-times"></i></a>
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
