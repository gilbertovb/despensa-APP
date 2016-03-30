@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sucesso</div>

                <div class="panel-body">
                    Registro realizado com sucesso.<br>
                    Favor verificar o seu email (<strong>{{ $email }}</strong>) para ativar a sua conta.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
