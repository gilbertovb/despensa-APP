@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>
                <a class="btn btn-small btn-success" href="{{ url('/products/create') }}">Adicionar</a>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Unidade</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->unit->name }}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->product_id . '/edit') }}">Editar</a>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('products/' . $value->product_id) }}">Apagar</a>
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
