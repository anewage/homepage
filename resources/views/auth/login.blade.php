@extends('layouts.app')

@section('sections')
    <section class="resume-section p-3 p-lg-5 d-flex d-column align-items-center justify-content-center" id="about">
        <div class="my-auto">
            <div class="">
                <div class="text-center d-xs-block d-lg-none">
                    <span>
                        <img class="img-fluid img-profile hiding-photo rounded-circle mx-auto mb-2" src="{{ asset('img/amir.jpg') }}" alt="">
                    </span>
                </div>
                <div>
                    <h2 class="mb-0">Admin
                        <span class="text-primary">Authentication</span>
                    </h2>
                </div>
            </div>
            <form method="POST" class="mb-1" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                    @endif
                    <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @if ($errors->has('password'))
                        <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </form>
        </div>
    </section>
@endsection
