@extends('layouts.app')

@section('title') {{'Login'}} @endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 px-0">
        <div class="card-body mx-5 px-4">
            <h2 class="card-title text-center pb-4 pt-5">
                <span class="welcome-to fw-bold">Welcome to</span>
                <span class="ic fw-bold">IC</span>
                <span class="food fw-bold">Food</span>
            </h2>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold" id="email">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row">
                    <div class="col mb-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label fw-bold" for="remember">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col mb-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link fw-bold" id="fgtpass" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row mb-6 mx-0 mt-2">
                        <button type="submit" class="btn btn-primary fw-bold" id="sub">
                            {{ __('Login') }}
                        </button>
                </div>

                <h5 class="card-title text-center fw-bold py-3">
                    OR
                </h5>

                <div class="row mb-6 mx-0">
                    <!-- tambahkan script di bawah ini untuk membuat tombol signin google -->
                    <a class="btn btn-danger" style="background-color: #4285F4" href="/auth/google">Login With Google</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 px-0">
        <img src="{{url('/images/Component 4.png')}}" class="img-fluid" alt="Image"/>
    </div>
  </div>
</div>
@endsection