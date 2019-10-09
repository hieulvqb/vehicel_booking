@extends('auth.layouts.app_registering_login')
@section('title', 'Create an Account!')

@section('content')

    <div class="wrapper wrapper-full-page">
        <div class="page-header register-page header-filter" filter-color="black"
             style="background-image: url({{ asset('image_display/register.jpg')  }}); padding: 0vh 0!important">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-signup">
                            <h3 class="card-title text-center">{{ __('Create an Account!') }}</h3>

                            <div class="card-body">

                                <form class="form-horizontal" method="POST" action="{{ route('register') }}" novalidate>
                                    @csrf

                                    <div class="card ">

                                        <div class="card-body ">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label lg_em_pa">{{ __('Name') }}</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" name="name" value="{{ old('name') }}"
                                                               class="form-control @error('name') is-invalid @enderror">
                                                    </div>
                                                    @error('name')
                                                    <label class="error_login">
                                                        <strong>{{ $message }}</strong>
                                                    </label>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row">
                                                <label class="col-sm-2 col-form-label lg_em_pa">{{ __('Email') }}</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="email" name="email" value="{{ old('email') }}"
                                                               class="form-control @error('name') is-invalid @enderror">
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
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="password" name="password"
                                                               value="{{ old('password') }}"
                                                               class="form-control @error('password') is-invalid @enderror">
                                                    </div>
                                                    @error('password')
                                                    <label class="error_login">
                                                        <strong>{{ $message }}</strong>
                                                    </label>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-sm-2 col-form-label lg_em_pa">{{ __('Confirm Password') }}</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="password" name="password_confirmation"
                                                               value="{{ old('password_confirmation') }}"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-info">Register</button>
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
