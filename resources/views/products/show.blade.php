@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Tem certeza que deseja EXCLUIR o produto abaixo?</div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td class="text-left"><strong>{{ $product->name }}</strong><br>
                                    <div style="margin-left: 15px;">{{ $product->stock->current }} {{$product->unit->name }}</div>
                                </td>
                                <td>
                                    <a title="Excluir" class="btn btn-danger" href="{{ URL::to('products/' . $product->product_id . '/delete') }}"><i class="fa fa-check"></i></a>
                                    <a title="Cancelar" class="btn btn-info" href="{{ URL::to('products') }}"><i class="fa fa-times"></i></a>
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
