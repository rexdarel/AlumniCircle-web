@extends('layouts.app')
@section('title')
    Register
@endsection

@section('content')
    <div class="login">
        <!-- Register -->
        @if(count([$errors]) > 0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
            <div class="login__block active" id="l-register">
                <div class="login__block__header palette-Blue bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-login" href="#">Already have an account?</a>
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                <div class="login__block__body">
                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="firstname" id="firstname"  value="{{ old('firstname') }}" required>
                        <label>First Name</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="middlename" id="middlename" value="{{ old('middlename') }}" required>
                        <label>Middle Name</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
                        <label>Last Name</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender') }}" required>
                        <label>Gender</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" required>
                        <label>Birthdate</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control" id="username" name="username"  value="{{ old('username') }}" required>
                        <label>firstname.lastname</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered" hidden="">
                        <input type="text" class="form-control" id="status" name="status"  value="APPROVED" required >
                        <label>firstname.lastname</label>
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group form-group--float form-group--centered" hidden="">
                        <input type="text" class="form-control" id="type" name="type"  value="SUPER ADMIN" required >
                        <label>firstname.lastname</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="password" class="form-control" name="password" id="password"  value="{{ old('password') }}" required>
                        <label>Password</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm"  value="{{ old('password') }}" required>
                        <label>Confirm Password</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Accept the license agreement</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </div>
            </form>
            </div>
        
    </div>
@endsection
