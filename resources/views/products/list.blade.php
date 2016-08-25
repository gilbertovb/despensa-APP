@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center">Produtos</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $value)
                            <tr>
                                <td class="text-left"><strong>{{ $value->name }}</strong><br>
                                    <div style="margin-left: 15px;">({{$value->unit->name }})</div>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a title="Editar" class="btn btn-info" href="{{ URL::to('products/' . $value->product_id . '/edit') }}"><i class="fa fa-pencil"></i></a>
                                    <a title="Apagar" class="btn btn-danger" href="{{ URL::to('products/' . $value->product_id) }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                <a class="btn btn-small btn-success" href="{{ url('/products/create') }}">Adicionar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
