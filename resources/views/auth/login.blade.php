@extends('auth.layouts.app_registering_login')
@section('title', 'Login')

@section('content')

    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url({{ asset('image_display/login.jpg') }}); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">

                        {{-----------form login-----------}}
                        <form method="POST" action="{{ route('login') }}" novalidate="novalidate">
                            @csrf
                            <div class="card">
                                <div class="card-header card-header-text card-header-info">
                                    <div class="card-text">
                                        <h4 class="card-title">{{ __('Dashboard') }}</h4>
                                        <p class="card-category">{{ __('Welcome To Dashboard') }}</p>
                                    </div>
                                </div>

                                <div class="card-body ">

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label lg_em_pa">{{ __('Email') }}</label>
                                        <div class="col-sm-8">
                                            <div class="form-group bmd-form-group">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                       class="form-control  @error('email') is-invalid @enderror">
                                            </div>
                                            @error('email')
                                            <label class="error_login">
                                                <strong>{{ $message }}</strong>
                                            </label>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label lg_em_pa">{{ __('Password') }}</label>
                                        <div class="col-sm-8">
                                            <div class="form-group bmd-form-group">
                                                <input type="password" name="password"
                                                       class="form-control  @error('password') is-invalid @enderror">
                                            </div>
                                            @error('password')
                                            <label class="error_login">
                                                <strong>{{ $message }}</strong>
                                            </label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-info">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                        {{-----------end form login-----------}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
