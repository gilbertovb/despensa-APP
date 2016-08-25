@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Tem certeza que deseja EXLCUIR a unidade e os produtos vinculados abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-responsive table-condensed">
                        <thead>
                            <tr>
                                <td class="text-left"><strong>{{ $unit->name }}</strong><br>
                                @foreach($products as $value)
                                <div style="margin-left: 15px;">{{$value->name }}<br></div>
                                @endforeach
                                </td>
                                <td>
                                    <a title="Excluir" class="btn btn-danger" href="{{ URL::to('units/' . $unit->unit_id . '/delete') }}"><i class="fa fa-check"></i></a>
                                    <a title="Cancelar" class="btn btn-info" href="{{ URL::to('units') }}"><i class="fa fa-times"></i></a>
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
