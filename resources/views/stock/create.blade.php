@extends('layouts.app')

@section('content')
<script>
jQuery(function ($){
    $( "input[type='checkbox']" ).change(function() {
        var input = $( this );
        if(input.prop("checked")){
            $("#min" + input.attr("id")).prop("disabled", false);
            $("#min" + input.attr("id")).prop("value", "1");
        }
        else{
            $("#min" + input.attr("id")).prop("value", "");
            $("#min" + input.attr("id")).prop("disabled", true);
        }

        $("#add").attr("disabled", !$("input[type='checkbox']").is(":checked"));
  });
    $("#stock").validate({
    });
    $(".clicke").click(function() {
        var inputid = $(this).attr("id").substring(9);
        var button = $(this).attr("id").substring(0,8);
        if($("#min" + inputid).is(":enabled")){
            var value = parseInt($("#min" + inputid).val(), 10);
            value = isNaN(value) ? 0 : value;
            if (button === "addValue"){   
                value++;
            }else if (button === "delValue"){
                value--;
            }
            if(value < 0)
                value = 0;
            $("#min" + inputid).val(value);
        }
//        alert($button);
    });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Adição de Produtos a Despensa</div>
                <div class="panel-body">
                    <form id="stock" class="form-horizontal" role="form" method="POST" action="{{ url('/stock/create') }}">
                        {!! csrf_field() !!}
                    <table class="table table-striped table-responsive table-condensed">
                        <thead>
                            <tr>
                                <th>Produtos</th>
                                <th>Quantidade minima</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $value)
                            <tr>
                                <td class="text-left">
                                    <div class="checkbox">
                                        <label>
                                        <input id="{{ $value->product_id }}" type="checkbox" name="products[]" value="{{ $value->product_id }}">
                                        {{ $value->name }}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group{{ $errors->has('mins[]') ? ' has-error' : '' }}">
                                        <div class="col-md-6 col-xs-6">
                                            <input id="min{{ $value->product_id }}" type="number" class="form-control" name="mins[]" value="{{ old('min[]') }}" disabled required>

                                            @if ($errors->has('mins[]'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mins[]') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            {{ $value->unit->name }}
                                        </div>
                                        <div class="col-xs-8 col-md-8">
                                            <a id="addValue-{{ $value->product_id }}" href="#" class="btn btn-danger clicke"><i class="fa fa-plus"></i></a>
                                            <a id="delValue-{{ $value->product_id }}" href="#" class="btn btn-warning clicke"><i class="fa fa-minus"></i></a>
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
