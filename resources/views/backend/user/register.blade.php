@extends('backend.layout.auth_master')
@section('title','Register Page')
@section('main-content')
    <div class="card">
        @include('backend.include.flash_message')
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>

            <form action="{{ route('backend.register') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" />
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center mb-3 d-grid gap-2">
                <p>- OR -</p>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-google me-2"></i> Sign in using Google+
                </a>
            </div>

            <p class="mb-0">
                <a href="{{ route('backend.showlogin') }}" class="text-center">I already have a membership</a>
            </p>
        </div>
    </div>
@endsection
