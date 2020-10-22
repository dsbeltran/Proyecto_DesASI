@extends('index')

@section('title', 'Inicio de Sesion')
@section('content')
<header>
<link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
</header>
<div class="login-page">
            <div class="form">
              <form method="POST" action="{{ route('login') }}" class="login-form">
              @csrf
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
                <p class="message">Not registered? <a href="#">Create an account</a></p>
              </form>
            </div>
          </div>
          <script src="assets/js/Sesion.js"></script>
@endsection
