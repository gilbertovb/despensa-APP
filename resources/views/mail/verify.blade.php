<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verificação do endereço de e-mail</h2>

        <div>
            <p>Obrigado por esperimentar o Despensa APP.<br>
                Com ele você vai poder controlar sua despensa de qualquer lugar.</p>
            <p>Por favor clique no link abaixo ou digite no seu navegador para validarmos o seu e-mail.</p>

            <a href="{{ URL::to('register/verify/' . $confirmation_code) }}">{{ URL::to('register/verify/' . $confirmation_code) }}</a>.<br/>

        </div>

    </body>
</html>