@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tem certeza que deseja EXCLUIR o produto abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->unit->name }}</td>
                                <td>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('products/' . $product->product_id . '/delete') }}">Excluir</a>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('products') }}">Cancelar</a>
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
