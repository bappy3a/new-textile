@extends('layouts.app')

@section('content')

<div class="card-inner card-inner-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Sign-In</h4>
            <div class="nk-block-des">
                <p>Access the {{ config('app.name') }} panel using your email and passcode.</p>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="default-01">Email or Username</label>
            </div>
            <div class="form-control-wrap">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" id="default-01" placeholder="Enter your email address or username">
            </div>
            @error('email')
            <div class="form-note text-danger">{{ $message }}</div>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="default-01">Password</label>
            </div>
            <div class="form-control-wrap">
                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" id="password" placeholder="Enter your passcode"  name="password" required autocomplete="current-password">
            </div>
        </div>
        <div class="form-group">
            <button typ="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </div>
    </form>
</div>

@endsection
