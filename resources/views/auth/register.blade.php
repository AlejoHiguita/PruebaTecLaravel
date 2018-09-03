<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <h1 class="register-title">Registro de usuarios</h1>
  <form class="register" method="POST" action="{{ route('register') }}">
    @csrf

    <input type="name" id="name" name="name" value="{{ old('name') }}" class="register-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre">
    @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
         <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif

    <input type="email" id="email" name="email" value="{{ old('email') }}" class="register-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico">
    @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
         <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif

    <input type="password" id="password" class="register-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
    @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
     </span>
    @endif

    <input type="password" id="password-confirm" class="register-input" name="password_confirmation"" placeholder="Confirmar contraseña">

    <input type="submit" value="Crear usuario" class="register-button">
  </form>
</body>
</html>
