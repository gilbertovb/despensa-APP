@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">O que é?</div>

                <div class="panel-body text-justify">
                    <p>Despensa APP é um sistema simples para controlar a sua despensa de casa de qualquer lugar.<br>
                    O sistema pode ser acessado do seu computador ou celular desde que tenha acesso a internet.</p>
                    <br>
                    <h4>Como funciona?</h4>
                    <p>O Despensa APP tem o seguinte menu:</p>
                    <img class="img-responsive" src="{{ url('/images/despensa1.png') }}">
                    <li>1 - Cadastre as unidades dos produtos (nome).</li>
                    <li>2 - Cadastre os produtos (nome e unidade).</li>
                    <li>3 - Adicione os produtos que você quer ter na sua despensa (quantidade mínima).</li>
                    <li>4 - Os produtos que você já tem na sua despensa ou que você comprou, devem ser atualizados para corrigir o estoque (quantidade comprada).</li>
                    <li>5 - Os produtos que você consome devem ser atualizados aqui (quantidade consumida).</li>
                    <p style="margin-top: 15px;">A lista de compras está no menu <strong>Comprar</strong> e será formada pelos produtos que você tem na despensa
                        que estão com a quantidade abaixo do mínimo configurado na despensa.</p>
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
