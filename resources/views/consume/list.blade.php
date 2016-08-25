@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Produtos disponiveis para consumo</div>
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
                                </td>
                                <td style="vertical-align: middle;">
                                    <a title="Consumir" class="btn btn-small btn-info" href="{{ URL::to('consume/' . $value->stock_id . '/edit') }}"><i class="fa fa-arrow-circle-o-down"></i></a>
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
