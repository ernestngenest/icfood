@extends('layouts.app')

@section('title') {{'Register'}} @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 px-0">
            <img src="{{url('/images/Component 5.png')}}" class="img-fluid" alt="Image"/>
        </div>
        <div class="col-md-6 px-0">
            <div class="card-body mx-5 px-4">
                <h2 class="card-title text-left pt-5 pb-1">
                    <span class="regs fw-bold">Register</span>
                </h2>
                <h5 class="card-title text-left pb-1">
                    <span class="slogan fw-bold">The search for your favorite recipe starts here</span>
                </h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col mb-6">
                            <label for="firstname" class="col-md-4 col-form-label fw-bold">{{ __('First Name') }}</label>
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col mb-6">
                        
                            <label for="lastname" class="col-md-4 col-form-label fw-bold">{{ __('Last Name') }}</label>
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 mt-2">
                        <label for="email" class="col-md-4 col-form-label fw-bold">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password" class="col-md-4 col-form-label fw-bold">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password-confirm" class="col-md-4 col-form-label fw-bold">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>
                            <label class="form-check-label fw-bold" for="terms">
                                {{ __('I agree with the terms and conditions') }}
                            </label>
                                <span class="invalid-feedback" for="terms">
                                Please check this box if you want to proceed.
                                </span>
                    </div>

                    <div class="row mb-6 mx-0">
                        <button type="submit" id="sub" class="btn btn-primary fw-bold">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
