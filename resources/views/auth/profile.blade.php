@extends('layouts.app')

@section('content')
<script>
jQuery(function ($) {
  $('#birth').mask('00/00/0000');
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Perfil</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-3">
                                <input disabled type="email" class="form-control" name="email" value="{{ $user->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de Nascimento</label>

                            <div class="col-md-3">
                                <input type="text" id="birth" placeholder="__/__/____" class="form-control" name="birth" maxlength="10" value="{{ $user->birth }}">

                                @if ($errors->has('birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-3">
                                <select class="form-control" name="sex">
                                @if($user->sex === 'H')
                                    <option value="H" selected>Homem</option>
                                    <option value="M">Mulher</option>
                                    <option value="I">Indefinido</option>
                                @elseif($user->sex === 'M')
                                    <option value="H">Homem</option>
                                    <option value="M" selected>Mulher</option>
                                    <option value="I">Indefinido</option>
                                @else
                                    <option value="H">Homem</option>
                                    <option value="M">Mulher</option>
                                    <option value="I" selected>Indefinido</option>
                                @endif
                                </select>

                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">País</label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" name="country" value="{{ $user->country }}">

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Estado</label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" name="state" value="{{ $user->state }}">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Cidade</label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" name="city" value="{{ $user->city }}">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nova Senha</label>

                            <div class="col-md-3">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirme a nova Senha</label>

                            <div class="col-md-3">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Salvar
                                </button><br><br>
                                @if (session('message'))
                                <div class="has-error">
                                    <span class="help-block">
                                        <strong>{{ session('message') }}</strong>
                                    </span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
