<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Redefinição de senha</h2>

        <div>
            <p>Por favor, clique no link abaixo ou digite no seu navegador para você definir a sua nova senha.</p>
            <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
        </div>

    </body>
</html>