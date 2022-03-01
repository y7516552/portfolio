@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Login') }}</h3></div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            <label for="inputEmail">{{ __('Email Address') }}</label>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Password" name="password" required autocomplete="current-password"/>
                            <label for="inputPassword">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                            <label class="form-check-label" for="inputRememberPassword">{{ __('Remember Me') }}</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-4 mb-0">

                            @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
