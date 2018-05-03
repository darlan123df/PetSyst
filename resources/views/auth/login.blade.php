@extends('layouts.app')

@section('title')
  Login
@endsection

@section('content')
<br>
<div class="container">
  <br>
  <br>
  <div class="row justify-content-center">

    <div class="col-md-5">
      <div class="card text-center">
        <div class="card-header">
          <img class="mb-3" src="{{asset('img/logo.png')}}" alt="" width="72" height="72">
          <h3 style="color:#088A85"><p>Bem-vindo! </p><h5 style="color:#DF3A01">PetSys</h5></h3>
        </div>
        <div class="card-body">
          <!--Inicio do form do login-->
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="{{ route('register') }}" class="btn btn-success my-2">Cadastre-se</a>
            <br>
            <a href="http://127.0.0.1:8000/password/reset" class="btn btn-link">Esqueceu a senha?</a>

          </form><!--fim do form do login-->


        </div>
        <div class="card-footer text-muted">
          <p style="color:#D8D8D8">Versão 1.0.1</p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
