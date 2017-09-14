@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="login">

            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Please Sign in

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-register" href="#">Create an account</a>
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password"  href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="login__block__body">
                        <div class="form-group form-group--float form-group--left">
                            <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" required="">
                            <label class="text-left">firstname.lastname</label>
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="form-group form-group--float form-group--left">
                            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" required="">
                            <label class="text-left">Password</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <label class="custom-control custom-checkbox align-self-start">
                                <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember me</span>
                        </label><br><br>

                        <button type="submit" class="btn btn-primary">Login</button>
                        <hr>
                        <p class="">Forgot password? <a href="">Reset here.</a></p>
                        <h5>OR</h5>
                        <p>No account yet? <a href="">Request here.</a></p>
                    </div>
                </form>
            </div>
    </div>
@endsection
