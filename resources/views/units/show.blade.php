@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tem certeza que deseja EXLCUIR a unidade e os produtos vinculados abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Unidade</td>
                                <td>Produtos</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $unit->name }}</td>
                                <td>
                                @foreach($products as $key => $value)
                                    {{ $value->name }}<br>
                                @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('units/' . $unit->unit_id . '/delete') }}">Excluir</a>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('units') }}">Cancelar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
