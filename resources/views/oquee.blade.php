@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">O que é?</div>

                <div class="panel-body">
                    <p>Despensa APP é um sistema simples para controlar a sua despensa de casa de qualquer lugar.<br>
                    O sistema pode ser acessado do seu computador ou celular desde que tenha acesso a internet.</p>
                    <br>
                    <h4>Como funciona?</h4>
                    <p>Você irá cadastrar os produtos e a quantidade mínima que deseja ter na sua despensa.<br>
                    Depois de realizado as compras no supermercado, você deve informar ao sistema o produto e a quantidade comprada e o mesmo irá atualizar a sua despensa.<br>
                    A cada consumo de um produto da despensa, você deve informar no sistema o que foi consumido para gerar a lista de compras.<br>
                    A lista de compras será gerada sempre com a quantidade necessária para atingir o mínimo de estoque na despensa.
                    </p>
                    <br>
                    <h3>Use-o, é gratis.</h3>
                    <a class="btn btn-small btn-primary" href="{{ url('/register') }}">
                        <i class="fa fa-btn fa-sign-in"></i>Registro
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
