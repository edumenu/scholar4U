@extends('layouts.auth_layout')

@section('content')


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="purple" data-image="images/admin_images/full-screen-image-1.jpg">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                            <div class="card card-hidden">
                                <div class="header text-center">{{ __('Login') }}</div>
                                <div class="content">

                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" >{{ __('Password') }}</label>

                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   </div>
                                </div>


                                <div class="form-group row text-center">
                                        <button type="submit" class="btn btn-fill limeGreen btn-wd">
                                            {{ __('Login') }}
                                        </button><br><br>

                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
