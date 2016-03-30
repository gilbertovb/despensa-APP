@extends('layouts.app')

@section('content')
<script>
jQuery(function ($){
    $( "input[type='checkbox']" ).change(function() {
        var $input = $( this );
        if($input.prop("checked")){
            $("#min" + $input.attr("id")).prop("disabled", false);
        }
        else{
            $("#min" + $input.attr("id")).prop("value", "");
            $("#min" + $input.attr("id")).prop("disabled", true);
        }

        $("#add").attr("disabled", !$("input[type='checkbox']").is(":checked"));
  });
    $("#stock").validate({
    });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Adição de Produtos a Despensa</div>
                <div class="panel-body">
                    <form id="stock" class="form-horizontal" role="form" method="POST" action="{{ url('/stock/create') }}">
                        {!! csrf_field() !!}
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td></td>
                                <td>Produto</td>
                                <td>Quantidade minima</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $value)
                            <tr>
                                <td>
                                    <input id="{{ $value->product_id }}" type="checkbox" class="form-control" name="products[]" value="{{ $value->product_id }}">
                                </td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <div class="form-group{{ $errors->has('mins[]') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="min{{ $value->product_id }}" type="number" class="form-control" name="mins[]" value="{{ old('min[]') }}" disabled required>{{ $value->unit->name }}

                                            @if ($errors->has('mins[]'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mins[]') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button id="add" type="submit" class="btn btn-success" disabled>Adicionar</button>
                            <a href="{{ url('/stock') }}" class="btn btn-info">Cancelar</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
