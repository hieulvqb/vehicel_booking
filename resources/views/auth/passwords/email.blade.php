@extends('layouts.app_registering_login')
@section('title', 'Reset password')

@section('content')

    <div class="wrapper wrapper-full-page">
        <div class="page-header register-page header-filter" filter-color="black"
             style="background-image: url({{ asset('image_display/register.jpg')  }}); padding: 0vh 0!important">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-signup">
                            <div class="text-center">
                                <h3 class="card-title">{{ __('Reset password') }}</h3>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>

                            <div class="card-body">

                                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}"
                                      novalidate>
                                    @csrf
                                    <div class="card ">

                                        <div class="card-body ">

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

                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-info">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
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
