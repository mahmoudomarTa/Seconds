@extends('layouts.auth_layout')

@section('content')


    <form class="login-form"  method="POST" action="{{ route('register') }}">
        @csrf
        <h3 class="form-title">create a new account</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{{ __('Name') }}</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" name="name" @error('name') is-invalid @enderror placeholder="{{ __('Name') }}" /> </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
            @enderror
        </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{{ __('E-Mail Address') }}</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" @error('email') is-invalid @enderror type="text" autocomplete="off" placeholder="{{ __('E-Mail Address') }}" name="email" /> </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
            @enderror
        </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" @error('password') is-invalid @enderror type="password" autocomplete="off" placeholder="{{ __('Password') }}" name="password" /> </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
            @enderror

        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9" required autocomplete="new-password">{{ __('Confirm Password') }}</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" /> </div>
        </div>



        <div class="form-actions">

            <button type="submit" class="btn btn-primary"> {{ __('Register') }} </button>
        </div>
        <div class="create-account">
            <p>Already have account?&nbsp;
                <a href="{{route('login')}}" id="register-btn"> Login </a>
            </p>
        </div>

    </form>


@endsection
